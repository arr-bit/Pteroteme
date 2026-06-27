cat > /var/www/pterodactyl/public/themes/custom/theme.css << 'EOF'
/* IOS GLASS CLEAN FIXED VERSION */

:root {
    --glass: rgba(255,255,255,0.08);
    --glass-border: rgba(255,255,255,0.15);
    --blur: 18px;
    --text: #ffffff;
    --accent: #0a84ff;
}

/* GLOBAL */
html, body {
    height: 100%;
    background: #0b0f1a !important;
    color: var(--text) !important;
}

/* SIDEBAR */
.main-sidebar {
    background: rgba(10,10,20,0.65) !important;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
}

/* GLASS COMPONENTS */
.card, .panel, .box, .container, .well {
    background: var(--glass) !important;
    border: 1px solid var(--glass-border) !important;
    backdrop-filter: blur(var(--blur)) !important;
    -webkit-backdrop-filter: blur(var(--blur)) !important;
    border-radius: 18px !important;
}

/* LOGIN */
.login-box, .auth-box {
    background: rgba(255,255,255,0.06) !important;
    backdrop-filter: blur(22px) !important;
    -webkit-backdrop-filter: blur(22px);
    border-radius: 20px !important;
}

/* INPUT */
input, textarea {
    background: rgba(255,255,255,0.06) !important;
    border: 1px solid rgba(255,255,255,0.1) !important;
    color: white !important;
    border-radius: 10px !important;
}

/* BUTTON */
.btn, button {
    background: linear-gradient(135deg, #0a84ff, #5ac8fa) !important;
    border: none !important;
    color: white !important;
    border-radius: 12px !important;
    transition: 0.2s ease;
}

.btn:hover {
    transform: scale(1.05);
    background: rgba(255,255,255,0.1) !important;
}
EOF
