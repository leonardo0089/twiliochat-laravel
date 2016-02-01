<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Twilio Chat Tests</title>
  <link rel="stylesheet" href="//code.jquery.com/qunit/qunit-1.20.0.css">
</head>
<body>
  <div id="qunit"></div>
  <div id="qunit-fixture">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="row"><div id="logo-column" class="col-md-2 col-md-offset-5">
            <img id="logo-image" src="{{ asset('img/twilio-logo.png') }}"/>
          </div></div>
          <div id="status-row" class="row">
            <div class="col-md-12 right-align">
              <span id="status-span">Connected as <b><span id="username-span"></span></b></span>
              <span id="leave-span"><b>x Leave</b></span>
            </div>
          </div>
        </div>
      </div>
      <div id="container" class="row">
        <div id="channel-panel" class="col-md-offset-2 col-md-2">
          <div id="channel-list" class="row"></div>
          <div id="new-channel-input-row" class="row">
            <textarea placeholder="Type channel name" id="new-channel-input" rows="1" maxlength="20" class="channel-element"></textarea>
          </div>
          <div class="row">
            <img id="add-channel-image" src="{{ asset('img/add-channel-image.png') }}"/>
          </div>
        </div>
        <div id="chat-window" class="col-md-4 with-shadow">
          <div id="message-list" class="row"></div>
          <div id="input-div" class="row">
            <textarea id="input-text" disabled="true" placeholder="   Your message"></textarea>
          </div>
          <div id="connect-panel" class="row with-shadow">
            <div class="row">
              <div class="col-md-12">
                <label for="username-input">Username: </label>
                <input id="username-input" type="text" placeholder="username"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <img id="connect-image" src="{{ asset('img/connect-image.png') }}"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="//code.jquery.com/qunit/qunit-1.20.0.js"></script>
  <script src="{{ asset('js/vendor/jquery.loadTemplate-1.4.4.min.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.min.js"></script>
  <script src="{{ asset('js/twiliochat.js') }}"></script>
  <script src="{{ asset('js/dateformatter.js') }}"></script>
  <script src="{{ asset('js/vendor/sinon-1.17.2.js') }}"></script>
  <script src="{{ asset('js/tests/tests.js') }}"></script>
</body>
</html>
