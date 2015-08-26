{include file='header.tpl'}

<script>
{literal}

var mySocket = {
	connection: undefined,
	initialise: function(){
		// if user is running mozilla then use it's built-in WebSocket
		//window.WebSocket = window.WebSocket || window.MozWebSocket;

		this.connection = new WebSocket('ws://localhost:9000');

		this.connection.onopen = function () {
			// connection is opened and ready to use
			console.log('opened');
		};

		this.connection.onerror = function (error) {
			// an error occurred when sending/receiving data
		};

		this.connection.onmessage = function (message) {
			console.log('received message: '+message.data);
			
			// try to decode json (I assume that each message from server is json)
			try {
				var json = JSON.parse(message.data);
				console.log(json.msg);
				
			} catch (e) {
				console.log('This doesn\'t look like a valid JSON: ', message.data);
				return;
			}
			// handle incoming message
			
		};

		this.connection.onclose = function(){
			console.log('connection close');
		}
	}
}

mySocket.initialise();
		 
{/literal}

</script>
Hi

{include file='footer.tpl'}
