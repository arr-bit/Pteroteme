<style>
/* ===== BACKGROUND ===== */
body {
    background-image: url('https://unggah.web.id/gvnpmG0MNE5P.jpg') !important;
    background-size: cover !important;
    background-attachment: fixed !important;
    background-position: center !important;
}
body::before {
    content: '';
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.3);
    z-index: 0;
    pointer-events: none;
}

/* ===== LIQUID GLASS BASE ===== */
.liquid-glass {
    background: rgba(255,255,255,0.1) !important;
    backdrop-filter: blur(16px) saturate(180%) !important;
    -webkit-backdrop-filter: blur(16px) saturate(180%) !important;
    border: 1px solid rgba(255,255,255,0.2) !important;
    box-shadow: 0 8px 32px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.2) !important;
    transition: all 0.3s cubic-bezier(0.25,0.46,0.45,0.94) !important;
}
.liquid-glass:hover {
    background: rgba(255,255,255,0.15) !important;
    box-shadow: 0 12px 40px rgba(0,0,0,0.35), inset 0 1px 0 rgba(255,255,255,0.25) !important;
    transform: translateY(-2px) !important;
}

/* ===== NAVBAR ===== */
nav, .navigation-bar, header {
    background: rgba(255,255,255,0.08) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-bottom: 1px solid rgba(255,255,255,0.15) !important;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2) !important;
}

/* ===== LOGIN PAGE ===== */
.login-box, [class*="login"] form, [class*="LoginBox"], 
div.flex.flex-col.items-center > div {
    background: rgba(255,255,255,0.1) !important;
    backdrop-filter: blur(24px) saturate(200%) !important;
    -webkit-backdrop-filter: blur(24px) saturate(200%) !important;
    border: 1px solid rgba(255,255,255,0.25) !important;
    border-radius: 20px !important;
    box-shadow: 0 16px 48px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.25) !important;
}

/* ===== SERVER CARDS ===== */
[class*="ServerRow"], [class*="server-row"],
div[class*="Row"], .server-card,
a[href*="/server/"] > div {
    background: rgba(255,255,255,0.08) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    border: 1px solid rgba(255,255,255,0.18) !important;
    border-radius: 16px !important;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2), inset 0 1px 0 rgba(255,255,255,0.15) !important;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1) !important;
    margin-bottom: 10px !important;
}
a[href*="/server/"] > div:hover {
    background: rgba(255,255,255,0.15) !important;
    transform: translateY(-3px) scale(1.01) !important;
    box-shadow: 0 16px 40px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.25) !important;
    border-color: rgba(255,255,255,0.3) !important;
}

/* ===== ADMIN CARDS & TABLES ===== */
.box, .card, .box-body, .box-header,
[class*="ContentContainer"], [class*="content-box"],
.panel, .panel-body {
    background: rgba(255,255,255,0.08) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    border: 1px solid rgba(255,255,255,0.18) !important;
    border-radius: 16px !important;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2) !important;
    color: white !important;
}

/* ===== BUTTONS ===== */
button, .btn, [class*="Button"] {
    transition: all 0.25s cubic-bezier(0.34,1.56,0.64,1) !important;
}
button:hover, .btn:hover, [class*="Button"]:hover {
    transform: translateY(-2px) scale(1.03) !important;
}
button:active, .btn:active, [class*="Button"]:active {
    transform: scale(0.96) !important;
}

/* ===== INPUT FIELDS ===== */
input, textarea, select {
    background: rgba(255,255,255,0.1) !important;
    border: 1px solid rgba(255,255,255,0.2) !important;
    border-radius: 10px !important;
    color: white !important;
    transition: all 0.3s ease !important;
}
input:focus, textarea:focus, select:focus {
    background: rgba(255,255,255,0.18) !important;
    border-color: rgba(255,255,255,0.4) !important;
    box-shadow: 0 0 0 3px rgba(255,255,255,0.1) !important;
    outline: none !important;
}
input::placeholder { color: rgba(255,255,255,0.5) !important; }

/* ===== CONSOLE / TERMINAL ===== */
[class*="console"], [class*="Console"],
div[class*="terminal"] {
    background: rgba(0,0,0,0.5) !important;
    backdrop-filter: blur(10px) !important;
    border: 1px solid rgba(255,255,255,0.1) !important;
    border-radius: 12px !important;
}

/* ===== SIDEBAR / TABS ===== */
[class*="sidebar"], [class*="Sidebar"],
[class*="navigation"], [class*="Navigation"] {
    background: rgba(255,255,255,0.06) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    border-right: 1px solid rgba(255,255,255,0.1) !important;
}

/* ===== PAGE ANIMATIONS ===== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
main, [class*="ContentContainer"], [class*="Wrapper"] {
    animation: fadeInUp 0.4s cubic-bezier(0.25,0.46,0.45,0.94) both !important;
}

/* ===== SCROLLBAR ===== */
::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); }
::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 3px; }
::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.35); }

/* ===== TEXT ===== */
p, span, label, h1, h2, h3, h4, td, th {
    color: rgba(255,255,255,0.9) !important;
}
a { color: rgba(255,255,255,0.85) !important; transition: color 0.2s !important; }
a:hover { color: white !important; }

/* ===== TABLE ===== */
table { border-collapse: separate !important; border-spacing: 0 4px !important; }
thead tr { background: rgba(255,255,255,0.08) !important; }
tbody tr {
    background: rgba(255,255,255,0.05) !important;
    transition: all 0.25s ease !important;
    border-radius: 8px !important;
}
tbody tr:hover {
    background: rgba(255,255,255,0.12) !important;
    transform: translateX(4px) !important;
}

/* ===== MUSIC PLAYER MINI ===== */
#music-player-mini {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 9999;
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: rgba(255,255,255,0.18);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.35);
    box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), opacity 0.3s ease, box-shadow 0.2s ease;
}
#music-player-mini:hover { transform: scale(1.12); box-shadow: 0 6px 28px rgba(0,0,0,0.45); }
#music-player-mini.hiding { transform: scale(0.4) !important; opacity: 0 !important; pointer-events: none !important; }

/* ===== MUSIC PLAYER EXPANDED ===== */
#music-player-expanded {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 9999;
    width: 290px;
    border-radius: 22px;
    background: rgba(255,255,255,0.13);
    backdrop-filter: blur(24px) saturate(180%);
    -webkit-backdrop-filter: blur(24px) saturate(180%);
    border: 1px solid rgba(255,255,255,0.28);
    box-shadow: 0 8px 32px rgba(0,0,0,0.4);
    padding: 18px;
    color: white;
    font-family: sans-serif;
    opacity: 0;
    transform: scale(0.7) translateY(30px);
    transform-origin: bottom right;
    pointer-events: none;
    transition: opacity 0.35s cubic-bezier(0.34,1.56,0.64,1), transform 0.35s cubic-bezier(0.34,1.56,0.64,1);
}
#music-player-expanded.visible { opacity: 1; transform: scale(1) translateY(0); pointer-events: all; }
.player-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px; }
.player-title { font-size: 11px; font-weight: 700; letter-spacing: 2px; opacity: 0.8; text-transform: uppercase; }
.player-close { cursor: pointer; opacity: 0.6; font-size: 16px; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,0.1); transition: opacity 0.2s, transform 0.2s; }
.player-close:hover { opacity: 1; transform: rotate(90deg); background: rgba(255,255,255,0.2); }
.song-info { text-align: center; margin-bottom: 12px; }
.disc-wrap { width: 72px; height: 72px; margin: 0 auto 8px; border-radius: 50%; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.3), rgba(255,255,255,0.05)); border: 2px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; font-size: 36px; animation: spin 5s linear infinite; box-shadow: 0 0 20px rgba(255,255,255,0.1); transition: box-shadow 0.3s; }
.disc-wrap.playing { box-shadow: 0 0 28px rgba(255,255,255,0.3); }
.disc-wrap.paused { animation-play-state: paused; }
@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
.song-name { font-size: 13px; font-weight: 600; opacity: 0.95; }
.equalizer { display: flex; align-items: flex-end; justify-content: center; gap: 3px; height: 22px; margin-bottom: 12px; }
.eq-bar { width: 4px; border-radius: 2px; background: rgba(255,255,255,0.75); transform-origin: bottom; }
.eq-bar:nth-child(1) { height: 8px; } .eq-bar:nth-child(2) { height: 16px; } .eq-bar:nth-child(3) { height: 22px; } .eq-bar:nth-child(4) { height: 13px; } .eq-bar:nth-child(5) { height: 20px; } .eq-bar:nth-child(6) { height: 10px; } .eq-bar:nth-child(7) { height: 17px; }
.equalizer.playing .eq-bar:nth-child(1) { animation: eq 0.5s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(2) { animation: eq 0.7s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(3) { animation: eq 0.4s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(4) { animation: eq 0.8s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(5) { animation: eq 0.55s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(6) { animation: eq 0.65s ease infinite alternate; }
.equalizer.playing .eq-bar:nth-child(7) { animation: eq 0.45s ease infinite alternate; }
@keyframes eq { from { transform: scaleY(0.25); opacity: 0.4; } to { transform: scaleY(1); opacity: 1; } }
.progress-bar-bg { width: 100%; height: 4px; background: rgba(255,255,255,0.2); border-radius: 2px; cursor: pointer; margin-bottom: 4px; position: relative; }
.progress-bar-fill { height: 4px; background: white; border-radius: 2px; width: 0%; transition: width 0.5s linear; position: relative; }
.progress-bar-fill::after { content: ''; position: absolute; right: -5px; top: -4px; width: 12px; height: 12px; border-radius: 50%; background: white; opacity: 0; transition: opacity 0.2s; }
.progress-bar-bg:hover .progress-bar-fill::after { opacity: 1; }
.time-info { display: flex; justify-content: space-between; font-size: 10px; opacity: 0.5; margin-bottom: 14px; }
.player-controls { display: flex; align-items: center; justify-content: center; gap: 18px; margin-bottom: 14px; }
.ctrl-btn { background: none; border: none; color: white; cursor: pointer; font-size: 20px; opacity: 0.75; padding: 6px; transition: all 0.2s ease; line-height: 1; border-radius: 50%; }
.ctrl-btn:hover { opacity: 1; transform: scale(1.2); background: rgba(255,255,255,0.1); }
.ctrl-btn:active { transform: scale(0.9); }
.ctrl-btn.play-btn { background: rgba(255,255,255,0.22); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 12px rgba(0,0,0,0.2); }
.ctrl-btn.play-btn:hover { background: rgba(255,255,255,0.32); }
.volume-container { display: flex; align-items: center; gap: 8px; }
.volume-container span { font-size: 13px; opacity: 0.5; }
.volume-slider { -webkit-appearance: none; width: 100%; height: 3px; border-radius: 2px; background: rgba(255,255,255,0.25); outline: none; cursor: pointer; transition: height 0.2s; }
.volume-slider:hover { height: 5px; }
.volume-slider::-webkit-slider-thumb { -webkit-appearance: none; width: 14px; height: 14px; border-radius: 50%; background: white; cursor: pointer; box-shadow: 0 0 6px rgba(0,0,0,0.3); transition: transform 0.2s; }
.volume-slider::-webkit-slider-thumb:hover { transform: scale(1.2); }
</style>

<audio id="bg-music" loop>
    <source src="https://unggah.web.id/uh1Cu6qdmK6Q.mp3" type="audio/mpeg">
</audio>

<div id="music-player-mini" onclick="openPlayer()" title="Music Player">🎵</div>

<div id="music-player-expanded">
    <div class="player-header">
        <div class="player-title">🎧 Now Playing</div>
        <div class="player-close" onclick="closePlayer()">✕</div>
    </div>
    <div class="song-info">
        <div class="disc-wrap paused" id="disc-icon">💿</div>
        <div class="song-name">Background Music</div>
    </div>
    <div class="equalizer" id="equalizer">
        <div class="eq-bar"></div><div class="eq-bar"></div><div class="eq-bar"></div>
        <div class="eq-bar"></div><div class="eq-bar"></div><div class="eq-bar"></div>
        <div class="eq-bar"></div>
    </div>
    <div class="progress-bar-bg" onclick="seekMusic(event)">
        <div class="progress-bar-fill" id="progress-fill"></div>
    </div>
    <div class="time-info">
        <span id="time-current">0:00</span>
        <span id="time-total">0:00</span>
    </div>
    <div class="player-controls">
        <button class="ctrl-btn" onclick="restartMusic()">⏮</button>
        <button class="ctrl-btn play-btn" id="play-btn" onclick="toggleMusic()">▶</button>
        <button class="ctrl-btn" onclick="toggleMute()" id="mute-btn">🔊</button>
    </div>
    <div class="volume-container">
        <span>🔈</span>
        <input type="range" class="volume-slider" id="volume-slider" min="0" max="100" value="70" oninput="setVolume(this.value)">
        <span>🔊</span>
    </div>
</div>

<script>
const music = document.getElementById("bg-music");
const playBtn = document.getElementById("play-btn");
const discIcon = document.getElementById("disc-icon");
const equalizer = document.getElementById("equalizer");
const progressFill = document.getElementById("progress-fill");
const timeCurrent = document.getElementById("time-current");
const timeTotal = document.getElementById("time-total");
const miniPlayer = document.getElementById("music-player-mini");
const expandedPlayer = document.getElementById("music-player-expanded");
music.volume = 0.7;
let started = false, muted = false;
function formatTime(s) { if(isNaN(s)) return "0:00"; const m=Math.floor(s/60),sec=Math.floor(s%60); return m+":"+(sec<10?"0":"")+sec; }
function openPlayer() {
    miniPlayer.classList.add("hiding");
    setTimeout(() => { miniPlayer.style.display="none"; miniPlayer.classList.remove("hiding"); expandedPlayer.style.display="block"; requestAnimationFrame(()=>requestAnimationFrame(()=>expandedPlayer.classList.add("visible"))); }, 250);
    if(!started) { music.play().catch(()=>{}); started=true; updatePlayState(); }
}
function closePlayer() {
    expandedPlayer.classList.remove("visible");
    setTimeout(() => { expandedPlayer.style.display="none"; miniPlayer.style.cssText="display:flex;opacity:0;transform:scale(0.4)"; requestAnimationFrame(()=>requestAnimationFrame(()=>{ miniPlayer.style.opacity=""; miniPlayer.style.transform=""; })); }, 320);
}
function toggleMusic() { if(!started){music.play().catch(()=>{}); started=true;} else if(music.paused){music.play();}else{music.pause();} updatePlayState(); }
function updatePlayState() { if(music.paused){playBtn.innerHTML="▶"; discIcon.classList.remove("playing"); discIcon.classList.add("paused"); equalizer.classList.remove("playing"); miniPlayer.innerHTML="🎵";}else{playBtn.innerHTML="⏸"; discIcon.classList.add("playing"); discIcon.classList.remove("paused"); equalizer.classList.add("playing"); miniPlayer.innerHTML="🎶";} }
function restartMusic() { music.currentTime=0; music.play(); started=true; updatePlayState(); }
function toggleMute() { muted=!muted; music.muted=muted; document.getElementById("mute-btn").innerHTML=muted?"🔇":"🔊"; }
function setVolume(val) { music.volume=val/100; muted=false; music.muted=false; document.getElementById("mute-btn").innerHTML=val==0?"🔇":"🔊"; }
function seekMusic(e) { const rect=e.currentTarget.getBoundingClientRect(); const ratio=(e.clientX-rect.left)/rect.width; if(music.duration) music.currentTime=ratio*music.duration; }
music.addEventListener("timeupdate",()=>{ if(music.duration){progressFill.style.width=(music.currentTime/music.duration*100)+"%"; timeCurrent.textContent=formatTime(music.currentTime); timeTotal.textContent=formatTime(music.duration);} });
music.addEventListener("play",updatePlayState);
music.addEventListener("pause",updatePlayState);
window.addEventListener("click",()=>{ if(!started){music.play().catch(()=>{}); started=true; updatePlayState();} },{once:true});
</script>
