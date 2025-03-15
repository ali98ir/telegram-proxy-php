# Telegram Proxy PHP

A lightweight PHP script that fetches public Telegram channel content and rewrites URLs to serve it through a custom domain.

## Features
- Fetches Telegram channel pages using cURL.
- Rewrites CDN, CSS, JS, and image URLs to a custom domain.
- Supports deep linking with `tg://` protocol for Telegram apps.
- Handles URL routing for specific channels.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/ali98ir/telegram-proxy-php.git
   ```
2. Upload the script to your server (e.g., via FTP or SSH).

3. Configure your web server (e.g., Apache/Nginx) to route requests to index.php.

4. Change $channel (YourChannelName) and $address (https://yourdomain.com).