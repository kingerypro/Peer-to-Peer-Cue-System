<div style="white-space: pre;">
  https://github.com/kingerypro/ender-3-series-upc
  THIS P2P REPO IS FORKED - THE CONTROLLER IS CUSTOM.
Ender 3 Series Controller V2: Integrated with the Peer-to-peer Cue System to the bottom of this readme. 
# Extended CUE commands from the Jmcker Repo for their Open Sourced Peer-to-Peer-Cue-System: https://github.com/jmcker/Peer-to-Peer-Cue-System
# Added console triggers to auto-click the controller buttons if cue response matches text (For ex: home printer) will automatically home the 
# connected printer. f100 or f75 commands will auto-adjust the fan speed to 75% or 100%. This was reverse-engineered and reengineered to fit my
# custom Ender Pro Series 3D Printer lineup.
</div>
<hr>
<div style="white-space: pre;">
# Peer-to-Peer Cue System #

Cue system for simple two-way communication and visual signaling using a WebRTC peer-to-peer connection.
This was initially designed for signaling on-stage actors during a theater performance.

Demo: https://jmcker.github.io/Peer-to-Peer-Cue-System

[PeerJS examples](https://peerjs.com/examples.html)

### Setup ###

1. Open receive.html on the receiving device.
2. Open send.html on the sending device.
3. Copy the ID from the receiving device to the sending device's ID field.
4. Press *Connect*.
4. Both should indicate a successful connection in the *Status* box.

### Features ###

The receiver has access to large indicators for standby, go, fade, and stop signals.

The sender has access to buttons that send the standby, go, fade, and stop signals, triggering the receiver's indicators.

Both have access to a two-way messenger for additional communication.

</div>
