<style>
#my_camera{
   width: 320px;
   height: 240px;
   border: 1px solid black;
}
input[type=button]{
    margin: 20px;
    background-color: #6293f5;
    color:white;
    border-radius: 5px;
    padding: 6px;
}
</style>

<center>
<div id="my_camera"></div>
<input type=button value="Take Snapshot" onClick="take_snapshot()">
<div id="results" ></div>
<input type=button value="Save" onClick="save_snapshot()">
</center>

<!-- Script -->
<script type="text/javascript" src="webcam.min.js"></script>

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">
// Configure a few settings and attach camera
Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
});
Webcam.attach( '#my_camera' );

// Variable to hold the data URI
var data_uri;

function take_snapshot() {
    // Take snapshot and get image data
    Webcam.snap( function(uri) {
        data_uri = uri;
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"style=" width: 320px;">';
    });
}

function save_snapshot() {
    // Upload the image data to the server
    Webcam.upload( data_uri, 'insert_image.php', function(code, text,Name) {
        console.log('Snapshot saved');
    });
}
</script>