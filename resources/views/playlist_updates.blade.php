<!doctype html>
<html>
  <head>
    <title>Playlist Updates</title>
  </head>
  <body>
    <div id="login-container" class="pre-auth">This application requires access to your YouTube account.
      Please <a href="#" id="login-link">authorize</a> to continue.
    </div>
    <div id="logout">logout</div>
    <div id="buttons">
      <button id="playlist-button" disabled onclick="createPlaylist()">Create a new Private Playlist</button>
      <br>
      <label>Current Playlist Id: <input id="playlist-id" value='' type="text"/></label>
      <br>
      <label>Video Id: <input id="video-id" value='GZG9G5txtaE' type="text"/></label><button onclick="addVideoToPlaylist()">Add to current playlist</button>
    </div>
    <h3>Playlist: <span id="playlist-title"></span></h3>
    <p id="playlist-description"></p>
    <div id="playlist-container">
      <span id="status">No Videos</span>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/youtool/public/assets/js/auth1.js"></script>
    <script src="/youtool/public/assets/js/playlist_updates1.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
  </body>
</html>
