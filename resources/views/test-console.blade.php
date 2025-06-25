<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Console Test</title>
  <style>
    .hidden { display: none; }
    .fixed { position: fixed; }
    .bottom-0 { bottom: 0; }
    .left-0 { left: 0; }
    .bottom-4 { bottom: 1rem; }
    .right-4 { right: 1rem; }
    .w-full { width: 100%; }
    .w-10 { width: 2.5rem; }
    .h-10 { height: 2.5rem; }
    .p-4 { padding: 1rem; }
    .bg-gray-900 { background: #111; }
    .bg-gray-800 { background: #222; }
    .bg-opacity-90 { opacity: 0.9; }
    .text-white { color: #fff; }
    .rounded-full { border-radius: 9999px; }
    .flex { display: flex; }
    .items-center { align-items: center; }
    .justify-center { justify-content: center; }
    .shadow-lg { box-shadow: 0 10px 15px rgba(0,0,0,.3); }
    .z-50 { z-index: 50; }
    input { width: 100%; padding: .5rem; background: #000; color: #fff; }
  </style>
</head>
<body>

  <nav id="dev-nav" class="hidden">
    <a href="/login">Login</a> |
    <a href="/register">Register</a>
  </nav>

  <button id="dev-toggle-btn" class="fixed bottom-4 right-4 w-10 h-10 bg-gray-800 text-white rounded-full flex items-center justify-center shadow-lg z-50">
    &gt;_
  </button>

  <div id="dev-console" class="hidden fixed bottom-0 left-0 w-full bg-gray-900 bg-opacity-90 p-4 z-40">
    <input id="dev-input" placeholder="Type login or register + Enter" />
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const consoleEl = document.getElementById('dev-console');
      const toggleBtn = document.getElementById('dev-toggle-btn');
      const inputEl   = document.getElementById('dev-input');
      const nav       = document.getElementById('dev-nav');

      toggleBtn.addEventListener('click', () => {
        consoleEl.classList.toggle('hidden');
        if (!consoleEl.classList.contains('hidden')) inputEl.focus();
      });

      inputEl.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
          const cmd = this.value.trim().toLowerCase();
          this.value = '';
          if (cmd === 'login' || cmd === 'register') {
            nav.classList.remove('hidden');
            window.location.href = '/' + cmd;
          } else {
            alert(`Unknown: ${cmd}`);
          }
        }
      });
    });
  </script>
</body>
</html>
