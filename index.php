<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/f84bad3724.js" crossorigin="anonymous"></script>
    <title>Printer Control</title>
    <style>
    body {
    display: flex;
    flex-direction: column; /* Ensure content flows in a column */
    align-items: center;
    height: 100vh;
    margin: 0;
    padding-bottom: 1000px; /* Add space at the bottom */
    overflow-y: scroll; /* Enable vertical scrolling */
}

        /* Add your CSS styles here */
        /* You can style buttons, layout, etc. */
        #progressBar {
            width: 100%;
            height: 20px;
            background-color: #ccc;
            border-radius: 5px;
            margin-top: 10px;
            display: none; /* Initially hide the progress bar */
        }

        #progressFill {
            height: 100%;
            background-color: #3498db;
            border-radius: 5px;
            width: 0;
            text-align: center;
            line-height: 20px;
            color: white;
        }

        /* Styling for the chatlog container */
        #chatlog {
            display:none;
            border: 1px solid #ccc;
            padding: 10px;
            height: 10px;
            overflow-y: hidden;
            margin-bottom: 0px;
        }
        #disconnectBtn {
            display:none;
            background-color:lime;
        }
        /* Styling for the response messages */
        .response-message {
            margin-bottom: -1px;
        }

        /* Styling for the buttons */
        .command-button {
            display: none; /* Initially hide command buttons */
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
        }
        

        /* CSS for not connected status */
        .not-connected {
            background-color: red;
        }

        /* CSS for connected status */
        .connected {
            background-color: green;
        }

        /* Apply basic styling to the directional buttons */
        .directional-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: none; /* Initially hide directional buttons */
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
            text-align: center;
            color:black;
        }
        /* Apply basic styling to the directional buttons */
        .directional-buttons-bp {
            z-index:999;
    position: fixed;
    bottom: 20px;
    left: 100px; /* Adjust the left value as needed */
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    display: none; /* Initially hide directional buttons */
    grid-template-columns: repeat(3, 1fr);
    gap: 5px;
    text-align: center;
}
.button {
    background-color: lightgrey;
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Add a smooth transition effect for both transform and box-shadow */
    padding: 10px 20px; /* Add padding for better visibility of the shadow */
    border: none; /* Remove the default button border */
    cursor: pointer; /* Change cursor on hover */
    border-radius:13px;
    color:black;
}

.button:hover {
    transform: scale(1.05); /* Scale up by 5% on hover */
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3); /* Add a shadow on hover */
    border-radius:15px;
}


.build-plate {
    color:black;
}
.option {
    margin:10px;
}
.header {
    background-color: #333; /* Background color */
    color: #fff; /* Text color */
    padding: 20px; /* Padding around the content */
    text-align: center; /* Center-align the text */
    font-size: 24px; /* Font size */
    font-weight: bold; /* Font weight (optional) */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Drop shadow for a 3D effect */
}






/* Style the container */
.tab-container {
    width: 75vw;
    margin: 0 auto;
    padding: 20px;
}

/* Style the tabs container */
.tab-buttons-container {
    display: flex;
    margin-bottom: 20px;
}

/* Style the tab buttons */
.tab-button {
    border: none;
    background-color: #ccc;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px 5px 0 0;
}

/* Style the active tab button */
.tab-button.active {
    background-color: #fff;
}

/* Style the tab contents */
.tab-contents-container {
    display: flex;
    flex-direction: column;
    border: 1px solid #ccc;
    border-radius: 0 0 5px 5px;
}

/* Style the individual tab content */
.tab-content {
    display: none;
    padding: 20px;
    border-bottom: 1px solid #ccc;
}

/* Style the active tab content */
.tab-content.active {
    display: block;
}
#connectBtn {
    background-color: lightgrey;
    color: white; /* Text color */
    padding: 10px 20px; /* Adjust padding for better button size */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px; /* Adjust font size */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Add smooth transitions */

    /* Add a hover effect */
    &:hover {
        background-color: grey; /* Change the background color on hover */
        transform: scale(1.1); /* Add a slight scale effect on hover */
    }
}

/* Style the list */
ul {
    list-style-type: none; /* Use a disc as the list marker */
    padding-left: 20px; /* Add some left padding for indentation */
}

/* Style the list items */
li {
    width:auto;
    margin: 15px; /* Add space between list items */
    font-size: 18px; /* Increase the font size */
    color: #333; /* Set the text color */
    background-color: #f0f0f0; /* Add a light gray background color */
    padding: 10px; /* Add padding to the list items */
    border-radius: 5px; /* Add rounded corners */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    transition: background-color 0.3s ease; /* Smooth background color transition on hover */

}

/* Hover effect for list items */
li:hover {
    background-color: #e0e0e0; /* Darker gray on hover */
}


/* Your existing CSS */
        .circle-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .circle:hover {
            background-color: #333;
            transform: scale(1.1);
        }

        .circle img {
            width: 100%;
            height: 100%;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        /* Style the entire tutorial container */
.modal-content {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left;
}

/* Style the main paragraph text */
.modal-content p {
    font-size: 16px;
    line-height: 1.5;
    margin: 10px 0;
}

/* Style the step headings */
.modal-content h3 {
    font-size: 20px;
    color: Gray;
    margin-top: 20px;
}

/* Style the links */
.modal-content a {
    color: #e74c3c;
    text-decoration: none;
    font-weight: bold;
}

.modal-content a:hover {
    text-decoration: underline;
}

/* Style the emoji icons */
.modal-content h3::before {
    content: "";
    display: inline-block;
    margin-right: 10px;
}

/* Style the bullet points */
.modal-content ul {
    list-style-type: disc;
    margin-left: 20px;
    margin-top: 10px;
}

/* Style the warning text */
.modal-content p.warning {
    color: #e74c3c;
    font-weight: bold;
}

/* Style the progress text */
.modal-content p.progress {
    color: #27ae60;
    font-weight: bold;
}



        .close {
            color: red;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
.modalImage {
    width:100px;
    height:100px;
    border-radius:15px;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Add smooth transitions */
}
.modalImage:hover {
    transform: scale(1.1); /* Add a slight scale effect on hover */
}

/* Basic styling for the tutorial */
.tutorial-container {
    text-align: left;
    margin: 20px auto;
    max-width: 600px;
    padding: 20px;
    background: transparent; /* Gradient background */
    border: none;
}

.tutorial-title {
    font-size: 24px;
    margin-bottom: 10px;
}

.tutorial-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.tutorial-description {
    font-size: 16px;
}

.next-button {
    padding: 10px 20px;
    background-color: lightgrey;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 18px;
    border-radius:13px;
}
.prev-button {
    color:white;
    padding: 5px 5px;
    background-color: #ffcccc;
    border: none;
    cursor: pointer;
    font-size: 18px;
    border-radius:13px;
}
.prev-button:hover {
    background-color: red;
}
/* Hover effect for the Next button */
.next-button:hover {
    background-color: green;
    border-radius:15px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.containerhide {
    display:none;
}
.tutorialhide {
    display:none;
}
.last-step {
    margin-bottom:200px;
}

.recap {
            background-color: #f0f0f0;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .recap h2 {
            color: #333;
        }

        .recap ul {
            list-style-type: decimal;
            padding-left: 20px;
        }

        .recap li {
            margin-bottom: 10px;
        }

        .recap .ready {
            font-size: 24px;
            color: green;
        }
        
        
        
        
        
        


.display {
    width: 100%;
    min-height: 400px;
    padding-bottom: 20px;
}

.control {
    width: 100%;
    padding-bottom: 2px;
}

.control-button {
    width: 100%;
    min-height: 50px;
}

.display-box {
    border: 2px solid black;
}

.title {
    vertical-align: top;
}

.standby {
    background-color: red;
}

.go {
    background-color: green;
}
.f100 {
    background-color: khaki;
}
.f75 {
    background-color: khaki;
}

.fade {
    background-color: yellow;
}
.home {
    background-color: aqua;
}

.off {
    background-color: gray;
}


.hidden {
    visibility: hidden;
}

.no-display {
    display: none;
}

.status {
    height: 125px;
    vertical-align: text-top;
    font-weight: bold;
    margin-bottom: 0px;
    border-bottom: 2px solid black;
    
}

.message {
    height: 125px;
    max-height: 125px;
    margin-bottom: 10px;
    border-bottom: 2px solid black;
    overflow: auto;
}

.msg-time {
    color: blue;
}

.cueMsg {
    color: orange;
}

.selfMsg {
    color: green;
}

.peerMsg {
    color: red;
}
    </style>
</head>
<body>
<div class="pwa-container">
    
</div>    
    

    <h2>Ender 3 Series UPC (Serverless Printer Controller)</h2>
    
    <button id="disconnectBtn" style="display:none;">Disconnect</button>
    <div id="status" style="display:none;">Status: Not Connected</div>
    <div id="chatlog" class="response-message"></div>





<div class="tab-container" id="tab-container" >
        <div class="tab-buttons-container">
            <button class="tab-button active" data-tab="unique-tab-1">Step 1: Power Up Your Printer  ></button>
            <button class="tab-button" data-tab="unique-tab-2">Step 2 🔊  ></button>
            <button class="tab-button" data-tab="unique-tab-3">Step 3 ✔️</button>
        </div>

        <div class="tab-contents-container">
            
            <div id="unique-tab-1" class="tab-content active">
                <ul>
                    <li>First, make sure your printer is turned on. You should see some lights and maybe a screen come to life. It's like waking up your printer from a nap.</li>
                    <li>Now, plug one end of your USB cable into your computer or laptop and the other end into your printer. This is how your computer talks to the printer, like a secret code..</li>
                </ul>
                <p></p>
            </div>

            <div id="unique-tab-2" class="tab-content">
                <ul>
                    <li>Here comes the twist of engagement! After connecting, listen carefully. Your computer might make a sound like a happy beep or a ding 🔊. This sound means your computer found your printer through the USB cable. It's like a little celebration!</li>
                    <li><b>💡:</b> If you don't hear the sound, don't worry! It happens. Try reconnecting the cable firmly. If that doesn't work, you might need a different cable. The cable is like a bridge, and sometimes bridges need replacing.</li>
                    <li>Once your printer is connected using USB, go to step 3.</li>
                </ul>
            </div>

            <div id="unique-tab-3" class="tab-content">
                <center><button id="connectBtn">Find My Printer 🖨️</button></center>
                <ul>
                    <li>Click on the "Find my Printer" 🖨️ button above.</li>
                    <li>You'll see a list of connections; just select your USB connection.</li>
                    <li> ✔️ You are connected! this guide will go away and you will see visual controls to control your printer.</li>
                </ul>
                <p>Now, after connecting to your 3D printer. You can use our visual controller to move your printer's parts and adjust settings as needed for a smooth 3D printing experience. This multi-step guide will go away after successful connection.</p>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabButtons = document.querySelectorAll(".tab-button");
      const tabContents = document.querySelectorAll(".tab-content");

      tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const tabId = button.getAttribute("data-tab");

          // Deactivate all tabs
          tabButtons.forEach((btn) => {
            btn.classList.remove("active");
          });

          tabContents.forEach((content) => {
            content.classList.remove("active");
          });

          // Activate the clicked tab
          button.classList.add("active");
          document.getElementById(tabId).classList.add("active");
        });
      });
    });
    </script>
    
    
    
    
    
<div class="container-additional-control-options containerhide" id="containerhide">
    
    <table class="display">
            <tr>
                <td class="title">Status:</td>
                <td class="title">Messages:</td>
            </tr>
            <tr>
                <td>
                    <div id="receiver-id" style="font-weight: bold;" title="Copy this ID to the input on send.html.">ID:</div>
                </td>
                <td>
                    <input type="text" id="sendMessageBox" placeholder="Enter a message..." autofocus="true" />
                    <button type="button" id="sendButton">Send</button>
                    <button type="button" id="clearMsgsButton">Clear Msgs (Local)</button>
                </td>
            </tr>
            <tr>
                <td><div id="status" class="status"></div></td>
                <td><div class="message" id="message"></div></td>
            </tr>
            <tr>
                <td class="display-box standby" id="standby"><h2>Standby</h2></td>
                <td class="display-box hidden" id="go"><h2>Go</h2></td>
            </tr>
            <tr>
                <td class="display-box hidden" id="fade"><h2>Fade</h2></td>
                <td class="display-box hidden" id="off"><h2>All Off</h2></td>
            </tr>
            <tr>
                <td class="display-box hidden" id="home"><h2>Home Printer</h2></td>
                <td class="display-box hidden" id="f100"><h2>f100 - Fan Speed 100%</h2></td>
            </tr>
            <tr>
                <td class="display-box hidden" id="f75"><h2>f75 - Fan Speed 50%</h2></td>
                <td class="display-box hidden" id="f50"><h2>f50 - Fan Speed 50%</h2></td>
            </tr>
        </table>

        <script src="https://unpkg.com/peerjs@1.5.0/dist/peerjs.min.js"></script>
        <script type="text/javascript">
            (function () {

                var lastPeerId = null;
                var peer = null; // Own peer object
                var peerId = null;
                var conn = null;
                var recvId = document.getElementById("receiver-id");
                var status = document.getElementById("status");
                var message = document.getElementById("message");
                var standbyBox = document.getElementById("standby");
                var goBox = document.getElementById("go");
                var homeBox = document.getElementById("home");
                var f100Box = document.getElementById("f100");
                var f75Box = document.getElementById("f75");
                var fadeBox = document.getElementById("fade");
                var offBox = document.getElementById("off");
                var sendMessageBox = document.getElementById("sendMessageBox");
                var sendButton = document.getElementById("sendButton");
                var clearMsgsButton = document.getElementById("clearMsgsButton");

                /**
                 * Create the Peer object for our end of the connection.
                 *
                 * Sets up callbacks that handle any events related to our
                 * peer object.
                 */
                 function initialize() {
                    // Create own peer object with connection to shared PeerJS server
                    peer = new Peer(null, {
                        debug: 2
                    });

                    peer.on('open', function (id) {
                        // Workaround for peer.reconnect deleting previous id
                        if (peer.id === null) {
                            console.log('Received null id from peer open');
                            peer.id = lastPeerId;
                        } else {
                            lastPeerId = peer.id;
                        }

                        console.log('ID: ' + peer.id);
                        recvId.innerHTML = "ID: " + peer.id;
                        status.innerHTML = "Awaiting connection...";
                    });
                    peer.on('connection', function (c) {
                        // Allow only a single connection
                        if (conn && conn.open) {
                            c.on('open', function() {
                                c.send("Already connected to another client");
                                setTimeout(function() { c.close(); }, 500);
                            });
                            return;
                        }

                        conn = c;
                        console.log("Connected to: " + conn.peer);
                        status.innerHTML = "Connected";
                        ready();
                    });
                    peer.on('disconnected', function () {
                        status.innerHTML = "Connection lost. Please reconnect";
                        console.log('Connection lost. Please reconnect');

                        // Workaround for peer.reconnect deleting previous id
                        peer.id = lastPeerId;
                        peer._lastServerId = lastPeerId;
                        peer.reconnect();
                    });
                    peer.on('close', function() {
                        conn = null;
                        status.innerHTML = "Connection destroyed. Please refresh";
                        console.log('Connection destroyed');
                    });
                    peer.on('error', function (err) {
                        console.log(err);
                        alert('' + err);
                    });
                };

                /**
                 * Triggered once a connection has been achieved.
                 * Defines callbacks to handle incoming data and connection events.
                 */
function ready() {
    conn.on('data', function (data) {
        console.log("Data received");
        var cueString = "<span class=\"cueMsg\">Cue: </span>";
        
        // Check if the received message contains "turn off"
        if (data.toLowerCase().includes('turn off')) {
            off();
            addMessage(cueString + "Turn Off");
        }
        // Check if the received message contains "turn on"
        else if (data.toLowerCase().includes('turn on')) {
            go();
            addMessage(cueString + "Turn On");
        }// Check if the received message contains "home printer"
        else if (data.toLowerCase().includes('home printer')) {
            home();
            addMessage(cueString + "Homing Printer...");
        }
        // Check if the received message contains "fade"
        else if (data.toLowerCase().includes('fade')) {
            fade();
            addMessage(cueString + "Fade");
        }
        // Check if the received message contains "fade"
        else if (data.toLowerCase().includes('f75')) {
            f75();
            addMessage(cueString + "Fan Speed 75%");
        }// Check if the received message contains "turn on"
        else if (data.toLowerCase().includes('f100')) {
            f100();
            addMessage(cueString + "Fan Speed 100%");
        }
        // Check if the received message contains "reset"
        else if (data.toLowerCase().includes('reset')) {
            reset();
            addMessage(cueString + "Reset");
        } else {
            switch (data) {
                case 'Go':
                    go();
                    addMessage(cueString + data);
                    break;
                case 'Off':
                    off();
                    addMessage(cueString + data);
                    break;
                case 'Home':
                    home();
                    addMessage(cueString + data);
                    break;
                case 'f100':
                    f100();
                    addMessage(cueString + data);
                    break;
                case 'f75':
                    f75();
                    addMessage(cueString + data);
                    break;
                // Handle other cases if needed
                default:
                    addMessage("<span class=\"peerMsg\">Peer: </span>" + data);
                    break;
            };
        }
    });
    conn.on('close', function () {
        status.innerHTML = "Connection reset<br>Awaiting connection...";
        conn = null;
    });
}
                function go() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box go";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box hidden";
                    return;
                };

                function fade() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box fade";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box hidden";
                    return;
                };
                function home() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box home";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box hidden";
                    
                    var homeButton = document.getElementById('autoHome');

                        if (homeButton) {
                            homeButton.click();
                        } else {
                            console.error("Button not found with the specified ID");
                        }

                    return;
                };
                function f100() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box f100";
                    f75Box.className = "display-box hidden";
                    
                    var f100Button = document.getElementById('f100%');

                        if (f100Button) {
                            f100Button.click();
                        } else {
                            console.error("Button not found with the specified ID");
                        }

                    return;
                };
                function f75() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box f75";
                    f100Box.className = "display-box hidden";
                    
                    var f75Button = document.getElementById('f75%');

                        if (f75Button) {
                            f75Button.click();
                        } else {
                            console.error("Button not found with the specified ID");
                        }

                    return;
                };

                function off() {
                    standbyBox.className = "display-box hidden";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box off";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box hidden";
                    return;
                }

                function reset() {
                    standbyBox.className = "display-box standby";
                    goBox.className = "display-box hidden";
                    fadeBox.className = "display-box hidden";
                    offBox.className = "display-box hidden";
                    homeBox.className = "display-box hidden";
                    f100Box.className = "display-box hidden";
                    f75Box.className = "display-box hidden";
                    return;
                };

                function addMessage(msg) {
                    var now = new Date();
                    var h = now.getHours();
                    var m = addZero(now.getMinutes());
                    var s = addZero(now.getSeconds());

                    if (h > 12)
                        h -= 12;
                    else if (h === 0)
                        h = 12;

                    function addZero(t) {
                        if (t < 10)
                            t = "0" + t;
                        return t;
                    };

                    message.innerHTML = "<br><span class=\"msg-time\">" + h + ":" + m + ":" + s + "</span>  -  " + msg + message.innerHTML;
                }

                function clearMessages() {
                    message.innerHTML = "";
                    addMessage("Msgs cleared");
                }

                // Listen for enter in message box
                sendMessageBox.addEventListener('keypress', function (e) {
                    var event = e || window.event;
                    var char = event.which || event.keyCode;
                    if (char == '13')
                        sendButton.click();
                });
                // Send message
                sendButton.addEventListener('click', function () {
                    if (conn && conn.open) {
                        var msg = sendMessageBox.value;
                        sendMessageBox.value = "";
                        conn.send(msg);
                        console.log("Sent: " + msg)
                        addMessage("<span class=\"selfMsg\">Self: </span>" + msg);
                    } else {
                        console.log('Connection is closed');
                    }
                });

                // Clear messages box
                clearMsgsButton.addEventListener('click', clearMessages);

                initialize();
            })();
        </script>
        
        
    <h3 class="header">Auto-Configuration</h3>
    <button class="button command-button option" data-command="M500; store current settings in EEPROM for the next startup" title="Save Current Settings to Printer"><i class="fa-solid fa-floppy-disk"></i>Save Settings to Printer</button>
    
    <button class="button command-button option" data-command="
    M117 Pre-heating Build Plate & Extruder... ; Display the message on the printer's display
    M104 S200;
    M140 S60;
    M117 Build Plate & Extruder Ready... ; Display the message on the printer's display
    " title="Preheat Extruder to 200 degress F"><i class="fa-solid fa-temperature-arrow-up"></i> Preheat Extruder (200F)</button>
    
    <button class="button command-button option" data-command="M140 S60" title="Preheat Bed to 60 degress F"><i class="fa-solid fa-temperature-arrow-up"></i> Preheat Bed (60F)</button>
    
    <button class="button command-button option" data-command="G28" title="Home All Axis"><i class="fa-solid fa-dice-five"></i> Home Axis</button><hr>
    <h3 class="header">Fan</h3>
    <button class="button command-button option" data-command="M106 S0" title="Fan OFF"><i class="fa-solid fa-fan"></i>Fan OFF</button>
    <button class="button command-button option" data-command="M106 S60" title="Set Fan Speed To 25%"><i class="fa-solid fa-fan"></i> Set Fan Speed To 25%</button>
    <button class="button command-button option" data-command="M106 S128" title="Set Fan Speed To 50%"><i class="fa-solid fa-fan"></i> Set Fan Speed To 50%</button>
    <button class="button command-button option" id="f75%" data-command="M106 S191" title="Set Fan Speed To 75%"><i class="fa-solid fa-fan"></i> Set Fan Speed To 75%</button>
    <button class="button command-button option" id="f100%" data-command="M106 S255" title="Set Fan Speed To 100%"><i class="fa-solid fa-fan"></i> Set Fan Speed To 100%</button><hr>
    <h3 class="header">Leveling</h3>
    <button class="button command-button option" data-command="
G28 ; Home all axes
G1 F1500;
M220 S80;
M558 S0.5 ; Set probing speed to 0.5 mm/s (adjust the value as needed)
G29 ; Auto bed leveling
G28 ; Home all axes again
G1 Z15.0 F9000 ; Move the Z-axis to a safe height
    " title=""><i class="fa-solid fa-window-minimize"></i>Bed Leveling + Home (auto)</button>
    <button class="button command-button option" data-command=
    "M117 Activating_Configuration_Wizard ; Display the message on the printer's display
M300 S440 P200 ; Beep to get attention (optional)
G91 ; Relative positioning
G1 Z50 F3000 ; Move Z-axis up 50mm at a speed of 3000mm/min
G90 ; Return to absolute positioning
"
    title=""><i class="fa-solid fa-bell"></i> Move Extruder Up</button>
    <hr>
    <h3 class="header">Z-Axis</h3>
    <button id="autoHome" class="button command-button option" data-command=
"
M117 Auto Homing... ; Display the message on the printer's display
G28 ; Home all axes (optional)
M117 Auto Homing Complete (1/4) ; Display the message on the printer's display
"
    title=""><i class="fa-solid fa-crosshairs"></i> Auto Home</button>
    
    <hr>
    <h3 class="header">6 Easy Steps to get you started, please follow each step carefully</h3>
    <ul>
        <li><h2>1: Ender 3 Series Setup:</h2><br>
            Lets start setting up your printer, please click the <button class="button command-button option" data-command=
"
M117 Auto Homing... ; Display the message on the printer's display
G28 ; Home all axes (optional)
M117 Auto Homing Complete (1/4) ; Display the message on the printer's display
"
    title=""><i class="fa-solid fa-crosshairs"></i> Auto Home</button> button, this will start to auto home your printer</li>
    <li><h2>2: Still too much gap?</h2><br>If your Extruder is too far above your build plate, you need to adjust the z-axis settings by first clicking the <button class="button command-button option" data-command=
"
M117 Removing soft end stop... ; Display the message on the printer's display
M211 S0 ; Home all axes (optional)
M117 Soft end removed... ; Display the message on the printer's display
"
    title=""><i class="fa-solid fa-square-minus"></i> Remove Soft End Stop</button> button, To extend your Z-axis movement beyond its current limit, you can disable the 'Soft End Stop' in your printer's settings. However, it's important to exercise caution when doing this, as it could potentially cause your print head to go lower than it should, risking damage to your print bed. We strongly advise against going too far, as it might lead to problems. Always be mindful of your printer's limits to avoid any unintended issues.</li>
    <li><h2>3: Finding Z-Axis and Z-Offset:</h2><br>

1:Access your printer settings manually by navigating through the menu on your printer's control panel. You should see options like INFO SCREEN, MOTION, TEMPERATURE, CONFIGURATION, and more.<br>

2:Select MOTION from the menu.<br>

3:Under MOTION, choose 'MOVE AXIS,' and then 'MOVE Z.' Start with a 1mm increment to slowly move your Z-Axis.<br>

4:Now, perform a paper test: Slide a piece of paper underneath the nozzle. The nozzle should be positioned just slightly above the build plate, and the paper should be gently gripped when you move it.<br>

5:Ensure that the extruder nozzle is in the center of the build plate when the paper is gripped.<br>

If you need to make finer adjustments, like 0.1mm increments, you can manually change the settings. Go to MOTION > MOVE AXIS > MOVE Z > 0.1mm and carefully adjust the extruder's Z-Axis to get the desired position where the extruder is gripping the paper at all 5 points on the bed. IT IS IMPORTANT TO TAKE NOTE OF THE CURRENT Z-AXIS for the next step.</li>
    <li><h2>4: Re-enable soft stops BEFORE COMPLETING Z-OFFSET:</h2>
        After adjusting your extruder correctly above your bed, you need to re-enable soft stops, this is important because the soft stops help ensure the printer doesnt go further than expected and this can in most cases be a safe guard so ALWAYS re-enable your soft stops after adjusting your Z-Axis by clicking the <button class="button command-button option" data-command=
"
M117 Enabling soft stop... ; Display the message on the printer's display
M211 S1 ; Re-enable soft stop (optional)
M117 Soft stop re-enabled... ; Display the message on the printer's display
"
    title=""><i class="fa-solid fa-plus-minus"></i> Re-enable Soft Stops</button> button.</li>
    <li>Now that you have successfully homed your printer and located your Z-Axis position (for example, Z-Axis: -009.1), it's time to make manual adjustments in your printer settings. Follow these steps:<br><br>

1. Access Configuration: Navigate to the 'CONFIGURATION' menu on your printer.<br>

2. Probe Z Offset: Inside the 'CONFIGURATION' menu, you'll find an option called 'PROBE Z OFFSET.' Select it.<br>

3. Adjust the Offset: In the 'PROBE Z OFFSET' menu, you'll see a numerical value that you can increment or decrease. This value represents your Z Offset.<br>

4. Calculate the Offset: To find your exact Z Offset, add the two numbers together. For example, if your Z-Axis is -009.1 and your Z Offset is +07.5, the calculation would be (-009.1 + 07.5 = -01.600).<br>

5. Save the Adjustment: Once you've adjusted your Z Offset, save the changes by clicking your printer's knob or equivalent control.<br>

By following these steps, you'll ensure that your Z Offset is accurately configured for your 3D printer. Once this is done, you can proceed to the next step in your printing process.<br>
</li>
    <li><h2>5: SAVE SETTINGS:</h2>
        Once you adjusted the number inside your Z OFFSET you need to save your settings to your printer by clicking the <button class="button command-button option" data-command="M500; store current settings in EEPROM for the next startup" title="Save Current Settings to Printer"><i class="fa-solid fa-floppy-disk"></i>Save Settings to Printer</button> button. When using the button, you will not hear a save beep, only see settings stored on screen. Manually, you can navigate to CONFIGURATION > STORE SETTINGS and click to save the current adjusted settings (you will hear a sound or some type of beep indicating the settings were stored. IT IS CRUTIAL TO SAVE SETTINGS because the 3D printers use EEPROM (Electrically Erasable Programmable Read-Only Memory) that automaticaly wipes on restart unless you save those settings directly using Cura, usb or sd card.</li>
    </ul>
    
</div>



<!-- Directional buttons -->
<div class="directional-buttons">
    Extruder
    <br>
    <button class="button up-button command-button" data-command="G1 Z0" title="Move the extruder up"><i class="fa-solid fa-chevron-up"></i></button>
    
    <button class="button down-button command-button" data-command="G1 Z0" title="Move the extruder down"><i class="fa-solid fa-chevron-down"></i></button>
    
    <button class="button left-button command-button" data-command="G1 X0" title="Move the extruder left"><i class="fa-solid fa-chevron-left"></i></button>
    
    <button class="button right-button command-button" data-command="G1 X0" title="Move the extruder right"><i class="fa-solid fa-chevron-right"></i></button>
</div>
<div class="directional-buttons-bp">
<!-- Build Plate Directional button for moving forward -->
<div class="build-plate">
    Build Plate
    <br>
    <button class="button command-button" id="buildPlateForwards" data-command="G1 Y0" title="Move the build plate forward by 10mm">
        <i class="fa-solid fa-chevron-down"></i>
    </button>
    <button class="button command-button" id="buildPlateBackwards" data-command="G1 Y-1" title="Move the build plate Backwards by 5mm">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
</div>
</div>



<script>
// Find the build plate forward button element by ID
const buildPlateForwardButton = document.getElementById('buildPlateForwards');


// Initialize the Y value for build plate forward movement
//Build plate movement Here
let yValue = 0;
// Initialize the Z value for up and down movement
//Extruder virtical movement Here
let zValue = 0;

// Initialize the X value for left and right movement
//Extruder horizontal movement Here
let xValue = 0;

// Add a click event listener to the build plate forward button
buildPlateForwardButton.addEventListener('click', () => {
    // Increment the Y value by 1
    yValue += 10;

    // Update the data-command attribute with the new Y value
    buildPlateForwardButton.setAttribute('data-command', `G1 Y${yValue}`);

    // Execute the movement command
    const selectedCommand = buildPlateForwardButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});
</script>

<script>
// Find the build plate forward button element by ID
const buildPlateBackwardButton = document.getElementById('buildPlateBackwards');



// Add a click event listener to the build plate forward button
buildPlateBackwardButton.addEventListener('click', () => {
    // Increment the Y value by 1
    yValue -= 10;

    // Update the data-command attribute with the new Y value
    buildPlateBackwardButton.setAttribute('data-command', `G1 Y${yValue}`);

    // Execute the movement command
    const selectedCommand = buildPlateBackwardButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});
</script>


<script>
// Find the Up button element
const upButton = document.querySelector('.up-button');

// Find the Down button element
const downButton = document.querySelector('.down-button');

// Find the Left button element
const leftButton = document.querySelector('.left-button');

// Find the Right button element
const rightButton = document.querySelector('.right-button');

// Add a click event listener to the Up button
upButton.addEventListener('click', () => {
    // Increment the Z value by 1
    zValue += 1;

    // Update the data-command attribute with the new Z value
    upButton.setAttribute('data-command', `G1 Z${zValue}`);

    // Execute the movement command
    const selectedCommand = upButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});

// Add a click event listener to the Down button
downButton.addEventListener('click', () => {
    // Decrease the Z value by 1
    zValue -= 1;

    // Update the data-command attribute with the new Z value
    downButton.setAttribute('data-command', `G1 Z${zValue}`);

    // Execute the movement command
    const selectedCommand = downButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});

// Add a click event listener to the Left button
leftButton.addEventListener('click', () => {
    // Decrease the X value by 1 for left movement
    xValue -= 1;

    // Update the data-command attribute with the new X value
    leftButton.setAttribute('data-command', `G1 X${xValue}`);

    // Execute the movement command
    const selectedCommand = leftButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});

// Add a click event listener to the Right button
rightButton.addEventListener('click', () => {
    // Increment the X value by 1 for right movement
    xValue += 1;

    // Update the data-command attribute with the new X value
    rightButton.setAttribute('data-command', `G1 X${xValue}`);

    // Execute the movement command
    const selectedCommand = rightButton.getAttribute('data-command');
    const command = selectedCommand + '\n';
    const writer = printer.writable.getWriter();
    writer.write(new TextEncoder().encode(command));
    writer.releaseLock();
});
</script>

    <div id="loadingSpinner" style="display: none;"></div>

    <audio id="successSound" preload="auto">
        <source src="connected_2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script>
        let printer;
        let reader;

        const statusElement = document.getElementById('status');

        function updateStatusBackground() {
            if (status === 'Status: Connected') {
                statusElement.style.backgroundColor = 'green';
            } else {
                statusElement.style.backgroundColor = 'red';
            }
        }

        updateStatusBackground();

        async function readFromPrinter() {
            if (!reader) {
                return;
            }

            try {
                const response = await reader.read();
                if (!response.done) {
                    const decodedResponse = new TextDecoder().decode(response.value);

                    if (decodedResponse.includes('echo:busy: processing')) {
                        document.getElementById('loadingSpinner').style.display = 'block';
                    } else {
                        document.getElementById('loadingSpinner').style.display = 'none';
                    }

                    addToChatlog(decodedResponse);

                    document.getElementById('chatlog').scrollTop = document.getElementById('chatlog').scrollHeight;

                    if (decodedResponse.includes('printer_finished_indicator')) {
                        document.getElementById('chatlog').style.display = 'none';
                    }
                }
                readFromPrinter();
            } catch (error) {
                console.error('Read error:', error);
                addToChatlog('Read Error');
            }
        }

        function playSuccessSound() {
            const successSound = document.getElementById('successSound');
            if (successSound) {
                successSound.play();
            }
        }

        function addToChatlog(message) {
            const chatlog = document.getElementById('chatlog');
            const messageElement = document.createElement('div');
            messageElement.classList.add('response-message');
            messageElement.innerText = message;
            chatlog.appendChild(messageElement);
            chatlog.scrollTop = chatlog.scrollHeight;
        }

        function toggleCommandButtons(status) {
            const commandButtons = document.querySelectorAll('.command-button');
            commandButtons.forEach((button) => {
                button.style.display = status === 'Connected' ? 'inline-block' : 'none';
            });
        }
        
        
        const commandButtons = document.querySelectorAll('.command-button');
        commandButtons.forEach((button) => {
            button.addEventListener('click', async () => {
                const selectedCommand = button.getAttribute('data-command');
                const command = selectedCommand + '\n';
                const writer = printer.writable.getWriter();
                await writer.write(new TextEncoder().encode(command));
                writer.releaseLock();
            });
        });
        


         document.getElementById('connectBtn').addEventListener('click', async () => {
            try {
                printer = await navigator.serial.requestPort();
                await printer.open({ baudRate: 115200 });
                document.getElementById('status').innerText = 'Status: Connected';
                document.getElementById('connectBtn').style.display = 'none';
                document.getElementById('disconnectBtn').style.display = 'none';
                document.getElementById('tab-container').style.display = 'none';
                playSuccessSound();
                toggleCommandButtons('Connected');
                reader = printer.readable.getReader();
                readFromPrinter();

                // Show the directional buttons for Extruder control container when connected
                document.querySelector('.directional-buttons').style.display = 'block';
                // Show the directional buttons for Build Plate Control container when connected
                document.querySelector('.directional-buttons-bp').style.display = 'block';
                // Show the build plate container when connected
                document.querySelector('.build-plate').style.display = 'block';
                document.getElementById('containerhide').style.display = 'block';
                document.getElementById('tutorialhide').style.display = 'block';
            } catch (error) {
                console.error('Connection error:', error);
                document.getElementById('status').innerText = 'Status: Connection Failed';
            }
        });

        document.getElementById('disconnectBtn').addEventListener('click', async () => {
            await printer.close();
            document.getElementById('status').innerText = 'Status: Not Connected';
            document.getElementById('connectBtn').style.display = 'inline-block';
            document.getElementById('disconnectBtn').style.display = 'none';
            toggleCommandButtons('Not Connected');
            if (reader) {
                reader.cancel();
                reader = null;
            }
        });
    </script>
</body>
</html>
