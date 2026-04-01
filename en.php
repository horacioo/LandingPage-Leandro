<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NextGen — Build the Revenue Operating System Your B2B Company Needs</title>
<meta name="description" content="Revenue Architecture for industrial and technology B2B companies. Ploomes CRM + RD Station + proprietary methodology. Free diagnostic session.">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root {
  --blue: #0047AB;
  --blue-mid: #0055CC;
  --blue-light: #66A3FF;
  --green: #00FFAA;
  --green-dark: #007A5E;
  --white: #FFFFFF;
  --dark: #080810;
  --dark2: #0D0D1A;
  --grafite: #1C1C2E;
  --gray: #F2F2F2;
  --gray-mid: #888;
  --yellow: #FFD700;
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }

body {
  font-family: 'Montserrat', sans-serif;
  background: var(--dark);
  color: var(--white);
  overflow-x: hidden;
  line-height: 1.6;
}

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0;
  z-index: 999;
  padding: 0 40px;
  height: 64px;
  display: flex; align-items: center; justify-content: space-between;
  background: rgba(8,8,16,.92);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid rgba(0,71,171,.2);
  transition: all .3s;
}

.nav-logo {
  font-size: 22px; font-weight: 900; letter-spacing: -1px;
  text-decoration: none; color: white;
}
.nav-logo .g { color: var(--blue-light); }
.nav-logo .e { color: var(--green); }

.nav-cta {
  padding: 10px 24px;
  background: var(--green);
  color: var(--dark);
  font-size: 12px; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1px;
  border-radius: 2px;
  text-decoration: none;
  transition: opacity .2s;
}
.nav-cta:hover { opacity: .85; }

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: flex; flex-direction: column;
  justify-content: center; align-items: center;
  text-align: center;
  padding: 120px 40px 80px;
  position: relative; overflow: hidden;
}

.hero-bg {
  position: absolute; inset: 0; z-index: 0;
  background:
    radial-gradient(ellipse 800px 500px at 50% 0%, rgba(0,71,171,.25) 0%, transparent 70%),
    radial-gradient(ellipse 400px 300px at 80% 80%, rgba(0,255,170,.07) 0%, transparent 60%);
}

.hero-grid {
  position: absolute; inset: 0; z-index: 0;
  background-image:
    linear-gradient(rgba(0,71,171,.07) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,71,171,.07) 1px, transparent 1px);
  background-size: 48px 48px;
}

.hero-badge {
  position: relative; z-index: 2;
  display: inline-flex; align-items: center; gap: 10px;
  font-family: 'Space Mono', monospace;
  font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
  color: var(--green);
  border: 1px solid rgba(0,255,170,.25);
  padding: 8px 18px; border-radius: 2px;
  margin-bottom: 36px;
  animation: fadeUp .7s ease both;
}

.hero-badge::before {
  content: '';
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--green);
  animation: blink 1.5s ease infinite;
}

@keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

.hero-h1 {
  position: relative; z-index: 2;
  font-size: clamp(36px, 6vw, 76px);
  font-weight: 900; line-height: 1.04;
  max-width: 980px;
  margin-bottom: 28px;
  animation: fadeUp .7s .15s ease both;
}

.hero-h1 em {
  font-style: normal;
  background: linear-gradient(100deg, var(--blue-light) 0%, var(--green) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero-sub {
  position: relative; z-index: 2;
  font-size: clamp(16px, 2vw, 20px);
  color: rgba(255,255,255,.6);
  max-width: 640px;
  font-weight: 400;
  margin-bottom: 52px;
  animation: fadeUp .7s .3s ease both;
  line-height: 1.7;
}

.hero-ctas {
  position: relative; z-index: 2;
  display: flex; gap: 16px; flex-wrap: wrap;
  justify-content: center;
  animation: fadeUp .7s .45s ease both;
}

.btn-hero-primary {
  padding: 18px 48px;
  background: var(--green);
  color: var(--dark);
  font-size: 14px; font-weight: 800;
  text-transform: uppercase; letter-spacing: 2px;
  border-radius: 2px; border: 2px solid var(--green);
  cursor: pointer; text-decoration: none;
  transition: all .2s;
  display: inline-block;
}
.btn-hero-primary:hover { background: transparent; color: var(--green); }

.btn-hero-secondary {
  padding: 18px 40px;
  background: transparent; color: rgba(255,255,255,.7);
  font-size: 14px; font-weight: 600;
  text-transform: uppercase; letter-spacing: 2px;
  border-radius: 2px; border: 2px solid rgba(255,255,255,.2);
  cursor: pointer; text-decoration: none;
  transition: all .2s;
  display: inline-block;
}
.btn-hero-secondary:hover { border-color: var(--blue-light); color: var(--blue-light); }

.hero-proof {
  position: relative; z-index: 2;
  display: flex; gap: 48px; flex-wrap: wrap;
  justify-content: center;
  margin-top: 72px;
  animation: fadeUp .7s .6s ease both;
}

.hero-stat { text-align: center; }
.hero-stat-num {
  font-size: 36px; font-weight: 900; letter-spacing: -1px;
  background: linear-gradient(135deg, var(--white), var(--blue-light));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.hero-stat-label {
  font-size: 12px; color: rgba(255,255,255,.4);
  text-transform: uppercase; letter-spacing: 2px; margin-top: 4px;
}

.hero-divider {
  width: 1px; height: 48px;
  background: rgba(255,255,255,.1);
  align-self: center;
}

@keyframes fadeUp {
  from { opacity: 0; transform: translateY(24px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ── TICKER ── */
.ticker {
  background: rgba(0,71,171,.12);
  border-top: 1px solid rgba(0,71,171,.25);
  border-bottom: 1px solid rgba(0,71,171,.25);
  overflow: hidden; padding: 14px 0;
}
.ticker-inner {
  display: flex; gap: 48px; white-space: nowrap;
  animation: ticker 25s linear infinite;
}
.ticker-item {
  font-family: 'Space Mono', monospace;
  font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
  color: rgba(255,255,255,.3); flex-shrink: 0;
  padding: 0 24px;
  border-right: 1px solid rgba(255,255,255,.08);
}
.ticker-item.hot { color: var(--green); }
@keyframes ticker { from{transform:translateX(0)} to{transform:translateX(-50%)} }

/* ── SECTIONS SHARED ── */
.section {
  padding: 100px 40px;
  max-width: 1160px; margin: 0 auto;
}

.section-label {
  font-family: 'Space Mono', monospace;
  font-size: 10px; letter-spacing: 4px; text-transform: uppercase;
  color: var(--green);
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 20px;
}
.section-label::after {
  content: ''; display: block;
  width: 32px; height: 1px; background: var(--green); opacity: .5;
}

.section-h2 {
  font-size: clamp(28px, 4vw, 50px);
  font-weight: 900; line-height: 1.1; margin-bottom: 20px;
}
.section-h2 em { font-style: normal; color: var(--blue-light); }

.section-body {
  font-size: 17px; color: rgba(255,255,255,.6);
  max-width: 680px; line-height: 1.8;
}

.full-divider {
  width: 100%; height: 1px;
  background: linear-gradient(90deg, transparent, rgba(0,71,171,.4), rgba(0,255,170,.2), transparent);
}

/* ── PROBLEM ── */
.pains-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 2px; margin-top: 56px;
}

.pain-card {
  padding: 36px 32px;
  background: rgba(255,255,255,.025);
  border: 1px solid rgba(255,255,255,.06);
  position: relative; overflow: hidden;
  transition: border-color .3s;
}
.pain-card:hover { border-color: rgba(0,71,171,.4); }

.pain-card::after {
  content: '';
  position: absolute; top: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--blue), transparent);
  transform: scaleX(0); transform-origin: left;
  transition: transform .4s;
}
.pain-card:hover::after { transform: scaleX(1); }

.pain-icon { font-size: 28px; margin-bottom: 20px; display: block; }
.pain-title { font-size: 17px; font-weight: 700; margin-bottom: 10px; }
.pain-desc { font-size: 14px; color: rgba(255,255,255,.5); line-height: 1.7; }

/* ── SOLUTION ── */
.solution-wrapper {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 80px; align-items: center;
  margin-top: 56px;
}

.solution-arch {
  background: var(--grafite);
  border: 1px solid rgba(0,71,171,.3);
  border-radius: 6px; overflow: hidden;
}

.arch-header {
  background: rgba(0,71,171,.15);
  border-bottom: 1px solid rgba(0,71,171,.2);
  padding: 16px 24px;
  font-family: 'Space Mono', monospace;
  font-size: 10px; letter-spacing: 3px;
  color: var(--green); text-transform: uppercase;
}

.arch-block {
  padding: 20px 24px;
  border-bottom: 1px solid rgba(255,255,255,.04);
  display: flex; align-items: center; gap: 16px;
  transition: background .2s;
}
.arch-block:hover { background: rgba(0,71,171,.08); }
.arch-block:last-child { border-bottom: none; }

.arch-num {
  width: 28px; height: 28px;
  background: rgba(0,71,171,.2);
  border: 1px solid rgba(0,71,171,.4);
  border-radius: 4px;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Space Mono', monospace; font-size: 10px;
  color: var(--blue-light); flex-shrink: 0;
}

.arch-title { font-size: 14px; font-weight: 700; }
.arch-sub { font-size: 12px; color: rgba(255,255,255,.4); margin-top: 2px; }

.solution-points { list-style: none; margin-top: 0; }
.solution-point {
  display: flex; gap: 16px; align-items: flex-start;
  padding: 16px 0;
  border-bottom: 1px solid rgba(255,255,255,.05);
}
.solution-point:last-child { border-bottom: none; }

.sp-dot {
  width: 8px; height: 8px; border-radius: 50%;
  background: var(--green); margin-top: 8px; flex-shrink: 0;
}
.sp-title { font-size: 16px; font-weight: 700; margin-bottom: 4px; }
.sp-desc { font-size: 13px; color: rgba(255,255,255,.5); line-height: 1.6; }

/* ── TIERS ── */
.tiers-section {
  padding: 100px 40px;
  background: rgba(0,71,171,.06);
  border-top: 1px solid rgba(0,71,171,.15);
  border-bottom: 1px solid rgba(0,71,171,.15);
}

.tiers-inner { max-width: 1160px; margin: 0 auto; }

.tiers-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 24px; margin-top: 56px;
}

.tier-card {
  padding: 40px 36px;
  border: 1px solid rgba(255,255,255,.08);
  background: rgba(8,8,16,.6);
  border-radius: 4px; position: relative;
  overflow: hidden; transition: border-color .3s, transform .3s;
}
.tier-card:hover { border-color: rgba(0,71,171,.5); transform: translateY(-4px); }

.tier-card.featured {
  border-color: var(--blue);
  background: rgba(0,71,171,.1);
}

.tier-badge {
  position: absolute; top: 0; right: 24px;
  background: var(--green); color: var(--dark);
  font-family: 'Space Mono', monospace;
  font-size: 9px; letter-spacing: 2px; text-transform: uppercase;
  padding: 5px 12px; border-radius: 0 0 4px 4px; font-weight: 700;
}

.tier-num {
  font-family: 'Space Mono', monospace;
  font-size: 10px; color: var(--green);
  letter-spacing: 3px; margin-bottom: 12px;
}

.tier-name { font-size: 28px; font-weight: 900; margin-bottom: 8px; letter-spacing: -1px; }
.tier-tagline { font-size: 14px; color: rgba(255,255,255,.5); margin-bottom: 28px; line-height: 1.5; }

.tier-items { list-style: none; margin-bottom: 36px; }
.tier-item {
  display: flex; gap: 12px; align-items: flex-start;
  padding: 8px 0;
  font-size: 14px; color: rgba(255,255,255,.75);
}
.tier-item::before { content: '✓'; color: var(--green); font-weight: 700; flex-shrink: 0; margin-top: 1px; }

/* ── PROOF ── */
.proof-section {
  padding: 100px 40px;
  max-width: 1160px; margin: 0 auto;
}

.case-card {
  background: var(--grafite);
  border: 1px solid rgba(0,71,171,.25);
  border-left: 4px solid var(--green);
  padding: 48px 56px;
  border-radius: 4px; position: relative; overflow: hidden;
}

.case-card::before {
  content: '"';
  position: absolute; top: -30px; left: 40px;
  font-size: 200px; font-family: Georgia, serif;
  color: rgba(0,71,171,.15); line-height: 1;
  pointer-events: none;
}

.case-company {
  font-family: 'Space Mono', monospace;
  font-size: 10px; letter-spacing: 4px; color: var(--green);
  text-transform: uppercase; margin-bottom: 20px;
}

.case-quote {
  font-size: clamp(18px, 2.5vw, 26px);
  font-weight: 700; line-height: 1.45;
  margin-bottom: 36px; position: relative; z-index: 2;
}

.case-stats { display: flex; gap: 40px; flex-wrap: wrap; }

.case-stat-num {
  font-size: 36px; font-weight: 900;
  background: linear-gradient(135deg, var(--blue-light), var(--green));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.case-stat-label { font-size: 12px; color: rgba(255,255,255,.45); margin-top: 4px; letter-spacing: 1px; }

/* ── FOUNDERS ── */
.founders-section {
  padding: 100px 40px;
  background: rgba(13,13,26,.8);
  border-top: 1px solid rgba(255,255,255,.06);
}

.founders-inner { max-width: 1160px; margin: 0 auto; }

.founders-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 32px; margin-top: 56px;
}

.founder-card {
  padding: 36px;
  border: 1px solid rgba(255,255,255,.07);
  border-radius: 4px; transition: border-color .3s;
}
.founder-card:hover { border-color: rgba(0,71,171,.4); }

.founder-avatar {
  width: 56px; height: 56px; border-radius: 50%;
  background: rgba(0,71,171,.2);
  border: 2px solid rgba(0,71,171,.4);
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; font-weight: 900; color: var(--blue-light);
  margin-bottom: 20px;
  font-family: 'Space Mono', monospace;
}

.founder-name { font-size: 18px; font-weight: 800; margin-bottom: 4px; }
.founder-role {
  font-family: 'Space Mono', monospace; font-size: 10px;
  letter-spacing: 2px; color: var(--green); text-transform: uppercase; margin-bottom: 16px;
}
.founder-bio { font-size: 14px; color: rgba(255,255,255,.5); line-height: 1.7; }

/* ── DIAGNOSTIC CTA ── */
.diag-section {
  padding: 100px 40px;
  max-width: 860px; margin: 0 auto; text-align: center;
}

.diag-label {
  display: inline-block;
  font-family: 'Space Mono', monospace;
  font-size: 10px; letter-spacing: 4px; text-transform: uppercase;
  color: var(--green);
  border: 1px solid rgba(0,255,170,.2);
  padding: 8px 16px; border-radius: 2px; margin-bottom: 36px;
}

.diag-h2 { font-size: clamp(32px, 5vw, 60px); font-weight: 900; line-height: 1.07; margin-bottom: 24px; }
.diag-h2 em { font-style: normal; color: var(--green); }

.diag-sub {
  font-size: 17px; color: rgba(255,255,255,.6);
  margin-bottom: 52px; line-height: 1.7; max-width: 640px;
  margin-left: auto; margin-right: auto;
}

.diag-items {
  display: grid; grid-template-columns: repeat(2, 1fr);
  gap: 16px; text-align: left; margin-bottom: 48px;
}

.diag-item {
  display: flex; gap: 14px; align-items: flex-start;
  padding: 20px;
  background: rgba(0,71,171,.08);
  border: 1px solid rgba(0,71,171,.2);
  border-radius: 4px;
}
.diag-check {
  width: 28px; height: 28px; border-radius: 50%;
  background: rgba(0,255,170,.1);
  border: 1px solid rgba(0,255,170,.3);
  display: flex; align-items: center; justify-content: center;
  color: var(--green); font-size: 13px; flex-shrink: 0; margin-top: 1px;
}
.diag-text { font-size: 14px; font-weight: 600; line-height: 1.5; }
.diag-caveat { font-size: 13px; color: rgba(255,255,255,.35); margin-top: 20px; font-style: italic; }

/* ── FORM ── */
.form-section { padding: 80px 40px 120px; max-width: 640px; margin: 0 auto; }

.form-box {
  background: var(--grafite);
  border: 1px solid rgba(0,71,171,.3);
  padding: 52px; border-radius: 6px;
}

.form-title { font-size: 24px; font-weight: 800; margin-bottom: 8px; text-align: center; }
.form-subtitle { font-size: 14px; color: rgba(255,255,255,.5); text-align: center; margin-bottom: 36px; }

.form-group { margin-bottom: 20px; }
.form-label {
  display: block;
  font-size: 12px; font-weight: 700;
  text-transform: uppercase; letter-spacing: 1px;
  color: rgba(255,255,255,.5); margin-bottom: 8px;
}
.form-input, .form-select {
  width: 100%; padding: 14px 18px;
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 3px; color: white;
  font-family: 'Montserrat', sans-serif;
  font-size: 14px; transition: border-color .2s; outline: none; appearance: none;
}
.form-input:focus, .form-select:focus { border-color: var(--blue-light); }
.form-input::placeholder { color: rgba(255,255,255,.2); }
.form-select option { background: var(--grafite); }

.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

.form-submit {
  width: 100%; padding: 18px;
  background: var(--green); color: var(--dark);
  font-family: 'Montserrat', sans-serif;
  font-size: 14px; font-weight: 800;
  text-transform: uppercase; letter-spacing: 2px;
  border: 2px solid var(--green); border-radius: 2px;
  cursor: pointer; transition: all .2s; margin-top: 8px;
}
.form-submit:hover { background: transparent; color: var(--green); }

.form-trust {
  display: flex; gap: 24px; justify-content: center;
  margin-top: 24px; flex-wrap: wrap;
}
.trust-item { font-size: 12px; color: rgba(255,255,255,.3); display: flex; align-items: center; gap: 6px; }

/* ── WHATSAPP ── */
.btn-whatsapp {
  display: flex; align-items: center; justify-content: center; gap: 10px;
  width: 100%; padding: 16px;
  background: #25D366; color: #fff;
  font-family: 'Montserrat', sans-serif;
  font-size: 14px; font-weight: 800;
  text-transform: uppercase; letter-spacing: 1px;
  border-radius: 2px; text-decoration: none;
  transition: opacity .2s; margin-top: 16px;
}
.btn-whatsapp:hover { opacity: .88; }

/* ── FAQ ── */
.faq-section { padding: 80px 40px; max-width: 800px; margin: 0 auto; }

.faq-item { border-bottom: 1px solid rgba(255,255,255,.07); overflow: hidden; }
.faq-q {
  width: 100%; text-align: left;
  padding: 24px 0;
  background: transparent; border: none; color: white;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px; font-weight: 700;
  cursor: pointer;
  display: flex; justify-content: space-between; align-items: center; gap: 16px;
}
.faq-icon {
  width: 28px; height: 28px; border-radius: 50%;
  background: rgba(0,71,171,.2);
  display: flex; align-items: center; justify-content: center;
  font-size: 18px; color: var(--green); flex-shrink: 0;
  transition: transform .3s;
}
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-a {
  font-size: 15px; color: rgba(255,255,255,.55);
  line-height: 1.8; max-height: 0;
  overflow: hidden; transition: max-height .4s ease, padding .3s;
}
.faq-item.open .faq-a { max-height: 200px; padding-bottom: 24px; }

/* ── FOOTER ── */
footer {
  background: rgba(0,0,0,.5);
  border-top: 1px solid rgba(255,255,255,.06);
  padding: 48px 40px;
  display: flex; justify-content: space-between; align-items: center;
  flex-wrap: wrap; gap: 24px;
  max-width: 1160px; margin: 0 auto;
}

.footer-logo { font-size: 26px; font-weight: 900; letter-spacing: -1px; }
.footer-logo .g { color: var(--blue-light); }
.footer-logo .fe { color: var(--green); }

.footer-links { display: flex; gap: 32px; flex-wrap: wrap; }
.footer-links a { font-size: 13px; color: rgba(255,255,255,.35); text-decoration: none; transition: color .2s; }
.footer-links a:hover { color: var(--blue-light); }

.footer-meta { font-family: 'Space Mono', monospace; font-size: 11px; color: rgba(255,255,255,.2); line-height: 1.8; text-align: right; }

/* ── STICKY MOBILE CTA ── */
.sticky-cta { display: none; position: fixed; bottom: 0; left: 0; right: 0; z-index: 998; background: var(--dark); border-top: 1px solid rgba(0,71,171,.3); padding: 16px 20px; }
@media (max-width: 768px) { .sticky-cta { display: block; } }
.sticky-btn {
  display: block; width: 100%; padding: 16px; text-align: center;
  background: var(--green); color: var(--dark);
  font-weight: 800; font-size: 13px;
  text-transform: uppercase; letter-spacing: 2px;
  border-radius: 2px; text-decoration: none;
}

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  .pains-grid { grid-template-columns: 1fr 1fr; }
  .solution-wrapper { grid-template-columns: 1fr; gap: 40px; }
  .tiers-grid, .founders-grid { grid-template-columns: 1fr; }
  .diag-items { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .case-stats { gap: 24px; }
  nav { padding: 0 20px; }
}

@media (max-width: 600px) {
  .pains-grid { grid-template-columns: 1fr; }
  .hero, .section, .tiers-section, .proof-section,
  .founders-section, .diag-section, .form-section, .faq-section { padding-left: 20px; padding-right: 20px; }
  .case-card { padding: 32px 24px; }
  .form-box { padding: 32px 24px; }
}
</style>
</head>
<body>



<!-------------------------------------------------------------------->
<a href="pt.php" title="Access page in Portuguese">
  <img src="img/brasil.webp" style="
    position: fixed;
    top: 4%;
    right: 1vw;
    width: 40px;
    height: auto;
    z-index: 3000000000;" />
</a>
<!-------------------------------------------------------------------->



<!-- NAV -->
<nav>
  <a class="nav-logo" href="#">Next<span class="g">G</span><span class="e">e</span>N</a>
  <a class="nav-cta" href="#form">Free Diagnostic</a>
</nav>

<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>

  <div class="hero-badge">Revenue Architecture Company · Greensboro, NC · São Paulo, BR</div>

  <h1 class="hero-h1">
    The next generation of<br>B2B companies already<br>operates <em>differently.</em>
  </h1>

  <p class="hero-sub">
    We build the revenue operating system for industrial and technology B2B companies —
    integrating CRM, processes, automation and intelligence to generate predictable, scalable growth.
  </p>

  <div class="hero-ctas">
    <a href="#form" class="btn-hero-primary">Get My Free Diagnostic</a>
    <a href="#solution" class="btn-hero-secondary">How it works</a>
  </div>

  <div class="hero-proof">
    <div class="hero-stat">
      <div class="hero-stat-num">30k+</div>
      <div class="hero-stat-label">Customers migrated</div>
    </div>
    <div class="hero-divider"></div>
    <div class="hero-stat">
      <div class="hero-stat-num">−60%</div>
      <div class="hero-stat-label">Proposal time with CPQ</div>
    </div>
    <div class="hero-divider"></div>
    <div class="hero-stat">
      <div class="hero-stat-num">28+</div>
      <div class="hero-stat-label">Years in B2B sales</div>
    </div>
    <div class="hero-divider"></div>
    <div class="hero-stat">
      <div class="hero-stat-num">3x</div>
      <div class="hero-stat-label">Lead conversion</div>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker">
  <div class="ticker-inner">
    <span class="ticker-item hot">Revenue Architecture</span>
    <span class="ticker-item">Ploomes CRM</span>
    <span class="ticker-item hot">RD Station</span>
    <span class="ticker-item">Sales Engagement</span>
    <span class="ticker-item hot">Predictable Pipeline</span>
    <span class="ticker-item">B2B RevOps</span>
    <span class="ticker-item hot">Automated CPQ</span>
    <span class="ticker-item">Greensboro NC · São Paulo BR</span>
    <span class="ticker-item hot">Launch → Growth → Scale</span>
    <span class="ticker-item">Certified Partners</span>
    <span class="ticker-item hot">Revenue Architecture</span>
    <span class="ticker-item">Ploomes CRM</span>
    <span class="ticker-item hot">RD Station</span>
    <span class="ticker-item">Sales Engagement</span>
    <span class="ticker-item hot">Predictable Pipeline</span>
    <span class="ticker-item">B2B RevOps</span>
    <span class="ticker-item hot">Automated CPQ</span>
    <span class="ticker-item">Greensboro NC · São Paulo BR</span>
    <span class="ticker-item hot">Launch → Growth → Scale</span>
    <span class="ticker-item">Certified Partners</span>
  </div>
</div>

<!-- ═══ PROBLEM ═══ -->
<section class="section" id="problem">
  <div class="section-label">The problem that cost you revenue today</div>
  <h2 class="section-h2">You don't have a<br><em>tool</em> problem.<br>You have an architecture problem.</h2>
  <p class="section-body">
    Most B2B companies already have a CRM. But it's barely used, the pipeline is full of
    ghost deals, and the forecast never closes. The problem isn't the software —
    it's the lack of operational structure around it.
  </p>

  <div class="pains-grid">
    <div class="pain-card">
      <span class="pain-icon">📊</span>
      <div class="pain-title">A pipeline that doesn't reflect reality</div>
      <div class="pain-desc">Deals stuck "in negotiation" for months. A forecast that's wrong every month. Pipeline reviews based on gut feeling instead of data.</div>
    </div>
    <div class="pain-card">
      <span class="pain-icon">📨</span>
      <div class="pain-title">Follow-ups that fall through the cracks</div>
      <div class="pain-desc">Deals that could have closed slipped away because someone forgot to follow up. Revenue evaporating due to a lack of cadence.</div>
    </div>
    <div class="pain-card">
      <span class="pain-icon">🔧</span>
      <div class="pain-title">CRM implemented, barely adopted</div>
      <div class="pain-desc">The system exists but the team doesn't use it. Every rep has their own way of doing things. Data is scattered across spreadsheets and WhatsApp.</div>
    </div>
    <div class="pain-card">
      <span class="pain-icon">⏱</span>
      <div class="pain-title">Slow and inaccurate proposals</div>
      <div class="pain-desc">A prospect asks for a quote and it takes days to deliver. No CPQ, no automation — and by then your competitor already got there first.</div>
    </div>
    <div class="pain-card">
      <span class="pain-icon">📉</span>
      <div class="pain-title">Marketing and sales disconnected</div>
      <div class="pain-desc">You invest in lead generation but the leads get lost in the handoff. No scoring, no routing, no efficient handoff between teams.</div>
    </div>
    <div class="pain-card">
      <span class="pain-icon">🔄</span>
      <div class="pain-title">Dependence on star performers</div>
      <div class="pain-desc">The operation relies on 1 or 2 people who "carry the team." If they leave, revenue goes with them. There's no scalable process underneath.</div>
    </div>
  </div>
</section>

<div class="full-divider"></div>

<!-- ═══ SOLUTION ═══ -->
<section class="section" id="solution">
  <div class="section-label">The solution</div>
  <h2 class="section-h2">Revenue Architecture:<br>the <em>operating system</em><br>of B2B growth</h2>
  <p class="section-body">
    We don't implement software. We build the complete commercial operation — strategy,
    process, technology and data integrated into an architecture that generates predictable growth.
  </p>

  <div class="solution-wrapper">
    <div>
      <div class="solution-arch">
        <div class="arch-header">NextGen Revenue Architecture™</div>
        <div class="arch-block">
          <div class="arch-num">01</div>
          <div>
            <div class="arch-title">CRM Strategy Design</div>
            <div class="arch-sub">Journey, ICP, funnel and KPIs — before any tool is configured</div>
          </div>
        </div>
        <div class="arch-block">
          <div class="arch-num">02</div>
          <div>
            <div class="arch-title">Revenue Operations</div>
            <div class="arch-sub">Data governance, mkt→sales SLA, operational cadence</div>
          </div>
        </div>
        <div class="arch-block">
          <div class="arch-num">03</div>
          <div>
            <div class="arch-title">Sales Engagement</div>
            <div class="arch-sub">Lead scoring, automations, cadences and CPQ proposals</div>
          </div>
        </div>
        <div class="arch-block">
          <div class="arch-num">04</div>
          <div>
            <div class="arch-title">Customer Revenue</div>
            <div class="arch-sub">Structured onboarding, expansion, retention and LTV</div>
          </div>
        </div>
      </div>
      <div style="margin-top:16px; padding:20px; background:rgba(0,255,170,.05); border:1px solid rgba(0,255,170,.15); border-radius:4px; text-align:center;">
        <div style="font-family:'Space Mono',monospace; font-size:10px; letter-spacing:3px; color:var(--green); margin-bottom:8px;">TECH STACK</div>
        <div style="font-size:13px; color:rgba(255,255,255,.6);">Ploomes CRM · RD Station · n8n · WhatsApp Business · ERP Protheus / SAP</div>
      </div>
    </div>

    <ul class="solution-points">
      <li class="solution-point">
        <div class="sp-dot"></div>
        <div>
          <div class="sp-title">Strategy before technology</div>
          <div class="sp-desc">We define process, journey and ICP first. Only then do we configure the technology. CRM without strategy is just an expensive database.</div>
        </div>
      </li>
      <li class="solution-point">
        <div class="sp-dot"></div>
        <div>
          <div class="sp-title">Certified Ploomes + RD Station specialists</div>
          <div class="sp-desc">We are official partners of both leading B2B platforms. Deep technical expertise — no improvisation, no generics.</div>
        </div>
      </li>
      <li class="solution-point">
        <div class="sp-dot"></div>
        <div>
          <div class="sp-title">Evolutionary model with ROI at each stage</div>
          <div class="sp-desc">Each tier delivers measurable results before advancing. You don't wait months to see a return on your investment.</div>
        </div>
      </li>
      <li class="solution-point">
        <div class="sp-dot"></div>
        <div>
          <div class="sp-title">Evolution partnership, not a one-off project</div>
          <div class="sp-desc">We accompany you from Stage 1 through Scale. The client grows and NextGen evolves with them — recurring contracts, continuous results.</div>
        </div>
      </li>
      <li class="solution-point">
        <div class="sp-dot"></div>
        <div>
          <div class="sp-title">28+ years of B2B complex sales DNA</div>
          <div class="sp-desc">The founding team lived the problem before building the solution. Real experience in consultative selling, long cycles and multiple decision-makers.</div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ═══ TIERS ═══ -->
<div class="tiers-section">
  <div class="tiers-inner">
    <div class="section-label">How we start</div>
    <h2 class="section-h2">Three evolution tiers.<br><em>ROI at each stage.</em></h2>
    <p class="section-body">
      You don't need to turn everything upside down. We start by building the foundation
      and evolve as your operation matures.
    </p>

    <div class="tiers-grid">
      <div class="tier-card">
        <div class="tier-num">TIER 01 —</div>
        <div class="tier-name">Launch</div>
        <div class="tier-tagline">Initial structure: move from spreadsheets to operating with process and real visibility.</div>
        <ul class="tier-items">
          <li class="tier-item">Full Ploomes + RD Station setup</li>
          <li class="tier-item">Standardized pipeline with methodology</li>
          <li class="tier-item">Data organization and migration</li>
          <li class="tier-item">Team training and adoption</li>
          <li class="tier-item">Initial strategic diagnostic</li>
        </ul>
      </div>

      <div class="tier-card featured">
        <div class="tier-badge">Most popular</div>
        <div class="tier-num">TIER 02 —</div>
        <div class="tier-name">Growth</div>
        <div class="tier-tagline">Operational scale: automations, integrations and commercial cadence fully running.</div>
        <ul class="tier-items">
          <li class="tier-item">Everything in Launch +</li>
          <li class="tier-item">Automations and lead scoring</li>
          <li class="tier-item">Ploomes + RD Station + ERP integration</li>
          <li class="tier-item">Dashboards with KPIs and forecast</li>
          <li class="tier-item">Active prospecting cadence</li>
        </ul>
      </div>

      <div class="tier-card">
        <div class="tier-num">TIER 03 —</div>
        <div class="tier-name">Scale</div>
        <div class="tier-tagline">Intelligence: CPQ, advanced BI and sustainable revenue predictability.</div>
        <ul class="tier-items">
          <li class="tier-item">Everything in Growth +</li>
          <li class="tier-item">CPQ for automated proposals</li>
          <li class="tier-item">Advanced BI and Revenue Intelligence</li>
          <li class="tier-item">ERP + WhatsApp + omnichannel integration</li>
          <li class="tier-item">RevOps as a Service — ongoing</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ═══ CASE ═══ -->
<section class="proof-section" id="cases">
  <div class="section-label">Real proof</div>
  <h2 class="section-h2" style="margin-bottom:40px">It works <em>in practice.</em></h2>

  <div class="case-card">
    <div class="case-company">Case · Sunnyvale — Industrial Machinery & Equipment</div>
    <div class="case-quote">
      "From spreadsheets and chaos to full commercial governance with 30,000 customers,
      200+ SKU families and 24 reps operating in the same system —
      with CPQ, multiple funnels and reliable forecasting."
    </div>
    <div class="case-stats">
      <div>
        <div class="case-stat-num">30,000+</div>
        <div class="case-stat-label">Customers migrated</div>
      </div>
      <div>
        <div class="case-stat-num">60</div>
        <div class="case-stat-label">Active users</div>
      </div>
      <div>
        <div class="case-stat-num">24</div>
        <div class="case-stat-label">Sales reps</div>
      </div>
      <div>
        <div class="case-stat-num">−60%</div>
        <div class="case-stat-label">Proposal time with CPQ</div>
      </div>
      <div>
        <div class="case-stat-num">100%</div>
        <div class="case-stat-label">Commercial governance</div>
      </div>
    </div>
  </div>

  <div style="margin-top:24px; padding:32px 40px; border:1px solid rgba(255,255,255,.07); border-radius:4px; display:flex; align-items:center; gap:32px; flex-wrap:wrap;">
    <div style="flex:1; min-width:260px;">
      <div style="font-family:'Space Mono',monospace; font-size:10px; letter-spacing:3px; color:var(--green); margin-bottom:12px;">CASE · LUDO PARA EMPRESAS</div>
      <div style="font-size:15px; font-weight:600; line-height:1.6;">Migration from Agendor to Ploomes in a fragmented data environment — full centralization and pipeline visibility for consultative B2B sales in corporate training.</div>
    </div>
    <div style="display:flex; gap:32px; flex-wrap:wrap;">
      <div style="text-align:center;">
        <div style="font-size:28px; font-weight:900; color:var(--blue-light);">100%</div>
        <div style="font-size:11px; color:rgba(255,255,255,.4);">Centralized data</div>
      </div>
      <div style="text-align:center;">
        <div style="font-size:28px; font-weight:900; color:var(--blue-light);">3x</div>
        <div style="font-size:11px; color:rgba(255,255,255,.4);">Lead conversion</div>
      </div>
    </div>
  </div>
</section>

<div class="full-divider"></div>

<!-- ═══ FOUNDERS ═══ -->
<div class="founders-section">
  <div class="founders-inner">
    <div class="section-label">Who builds with you</div>
    <h2 class="section-h2">A founding team with<br><em>real commercial DNA.</em></h2>
    <p class="section-body">
      We're not consultants who have never sold. We are professionals who lived the exact pains
      we solve — and built NextGen to turn that knowledge into architecture.
    </p>

    <div class="founders-grid">
      <div class="founder-card">
        <div class="founder-avatar">LL</div>
        <div class="founder-name">Leandro Lopes</div>
        <div class="founder-role">GTM & Sales Strategy</div>
        <div class="founder-bio">20+ years in complex B2B sales. Led commercial operations across technology and services companies. Specialist in Revenue Architecture and Sales Engagement with a focus on measurable results.</div>
      </div>
      <div class="founder-card">
        <div class="founder-avatar">RB</div>
        <div class="founder-name">Rodrigo Baracho</div>
        <div class="founder-role">Customer Success & RevOps</div>
        <div class="founder-bio">Specialist in CRM engagement, retention and expansion of strategic accounts. International and multicultural experience in complex B2B operations and commercial data governance.</div>
      </div>
      <div class="founder-card">
        <div class="founder-avatar">LY</div>
        <div class="founder-name">Léo Yanaguihara</div>
        <div class="founder-role">CRM Architect & SaaS Implementation</div>
        <div class="founder-bio">Senior Ploomes Partner. CRM and CPQ architecture. Process automation. Front-end & UX background from USP. Proprietary SaaS implementation methodology for complex B2B companies.</div>
      </div>
    </div>

    <div style="margin-top:48px; padding:32px; background:rgba(0,71,171,.08); border:1px solid rgba(0,71,171,.2); border-radius:4px; text-align:center;">
      <div style="font-size:16px; color:rgba(255,255,255,.6); max-width:640px; margin:0 auto; line-height:1.7;">
        Official partners of <strong style="color:white">Ploomes CRM</strong> and <strong style="color:white">RD Station</strong> —
        the leading platforms for complex B2B sales in Latin America.
        Real technical depth, certified expertise and direct access to partner roadmaps.
      </div>
    </div>
  </div>
</div>

<!-- ═══ DIAGNOSTIC CTA ═══ -->
<section class="diag-section" id="diagnostic">
  <div class="diag-label">Next step</div>
  <h2 class="diag-h2">
    Free RevOps<br><em>Diagnostic.</em><br>45 minutes. Only value.
  </h2>
  <p class="diag-sub">
    A session with a NextGen specialist to map where your operation is stuck and
    what to do in the next 30 days. No commitment. No sales pitch.
  </p>

  <div class="diag-items">
    <div class="diag-item">
      <div class="diag-check">✓</div>
      <div class="diag-text">Analysis of your current commercial maturity stage</div>
    </div>
    <div class="diag-item">
      <div class="diag-check">✓</div>
      <div class="diag-text">Identification of the 3 biggest bottlenecks blocking growth</div>
    </div>
    <div class="diag-item">
      <div class="diag-check">✓</div>
      <div class="diag-text">Personalized roadmap: Launch → Growth → Scale</div>
    </div>
    <div class="diag-item">
      <div class="diag-check">✓</div>
      <div class="diag-text">Practical recommendations to implement in 30 days</div>
    </div>
  </div>

  <a href="#form" class="btn-hero-primary" style="display:inline-block;">Schedule My Free Diagnostic →</a>
  <div class="diag-caveat">Limited spots · For B2B companies with annual revenue above $1M and an active sales team</div>
</section>

<!-- ═══ FORM ═══ -->
<section class="form-section" id="form">

<form action="mail.php" method="POST">
  <div class="form-box">
    <div class="form-title">Talk to a specialist</div>
    <div class="form-subtitle">Fill in the form below and we'll reach out within 1 business day to schedule your diagnostic.</div>

    <div class="form-group">
      <label class="form-label" >Full name *</label>
      <input class="form-input" id="nomeCompleto" type="text" placeholder="Your name">
    </div>

    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Business email *</label>
        <input class="form-input" id="email" type="email" placeholder="you@company.com">
      </div>
      <div class="form-group">
        <label class="form-label">WhatsApp / Phone *</label>
        <input class="form-input" id="whatsapp" type="tel" placeholder="+1 (555) 000-0000">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Company *</label>
      <input class="form-input" id="empresa"  type="text" placeholder="Company name">
    </div>

    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Job title *</label>
        <select class="form-select" id="cargo">
          <option value="" disabled selected>Select</option>
          <option>CEO / Founder</option>
          <option>VP / Director of Sales</option>
          <option>Sales Manager</option>
          <option>Head of Operations</option>
          <option>Head of Marketing</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Annual revenue *</label>
        <select id="faturamento" class="form-select">
          <option value=""  disabled selected>Select</option>
          <option>$1M – $5M</option>
          <option>$5M – $15M</option>
          <option>$15M – $50M</option>
          <option>Above $50M</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Industry *</label>
      <select class="form-select" id="setor">
        <option value="" disabled selected>Select your industry</option>
        <option>Industrial Manufacturing</option>
        <option>B2B Distribution</option>
        <option>Technical / Industrial Services</option>
        <option>B2B Technology</option>
        <option>Engineering Services</option>
        <option>Marketing Agency</option>
        <option>Other B2B</option>
      </select>
    </div>

    <div class="form-group">
      <label class="form-label">What's your biggest pain right now?</label>
      <input class="form-input" type="text" id="dor" placeholder="e.g. Messy pipeline, lost follow-ups, no forecasting...">
    </div>

    <button class="form-submit" id="formSubmitBtn">Get My Free Diagnostic →</button>

    <div style="display:flex; align-items:center; gap:16px; margin-top:20px;">
      <div style="flex:1; height:1px; background:rgba(255,255,255,.08);"></div>
      <span style="font-size:12px; color:rgba(255,255,255,.25); font-family:'Space Mono',monospace; letter-spacing:2px;">OR</span>
      <div style="flex:1; height:1px; background:rgba(255,255,255,.08);"></div>
    </div>

    <a href="https://wa.me/5511988282177?text=Hi!%20I%20found%20NextGen%20and%20would%20like%20to%20schedule%20a%20free%20diagnostic%20session." target="_blank" class="btn-whatsapp">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
      </svg>
      Chat on WhatsApp now
    </a>

    <div class="form-trust">
      <span class="trust-item">🔒 No spam</span>
      <span class="trust-item">⚡ Reply within 1 business day</span>
      <span class="trust-item">✓ No commitment</span>
    </div>
  </div>
</form>
</section>

<div class="full-divider"></div>

  <script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="javascript/form.js"></script>





<!-- ═══ FAQ ═══ -->
<section class="faq-section">
  <div class="section-label">Frequently asked questions</div>
  <h2 class="section-h2" style="margin-bottom:40px">Questions we've<br>heard before.</h2>

  <div class="faq-item">
    <button class="faq-q">
      We already have a CRM. Does NextGen still make sense for us?
      <span class="faq-icon">+</span>
    </button>
    <div class="faq-a">
      Yes — and it's actually the most common scenario. Having a CRM without a structured process is the
      main pain we solve. We diagnose your current operation and build the right architecture on top
      of what you already have, without throwing away what works.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-q">
      We're a small company. Can we still work with NextGen?
      <span class="faq-icon">+</span>
    </button>
    <div class="faq-a">
      We work with B2B companies with annual revenue above $1M and an active sales team. The Tier 1 Launch
      was designed specifically for SMBs that need to build the foundation without a massive investment.
      The evolutionary model ensures you pay for what you're ready to use.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-q">
      How long before we see results?
      <span class="faq-icon">+</span>
    </button>
    <div class="faq-a">
      Tier 1 Launch delivers operational structure in 60–90 days. Measurable results in pipeline
      organization, faster proposals and team adoption appear even before that. Each tier has clear
      deliverables and measurable ROI before advancing to the next stage.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-q">
      Do we need to use Ploomes and RD Station?
      <span class="faq-icon">+</span>
    </button>
    <div class="faq-a">
      We are certified specialists in these two platforms and they form the most complete ecosystem
      for complex B2B in Latin America. In the diagnostic we assess your current setup — if you
      already use other tools, we'll discuss the most suitable migration or integration path.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-q">
      What happens after the free diagnostic?
      <span class="faq-icon">+</span>
    </button>
    <div class="faq-a">
      You receive an honest assessment of your operation and a personalized roadmap — even if you
      don't hire NextGen. If it makes sense to move forward together, we present a proposal for
      the right tier for your current stage. No pressure, no aggressive pitch.
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<div style="background:rgba(0,0,0,.4); border-top:1px solid rgba(255,255,255,.06);">
  <footer>
    <div class="footer-logo">Next<span class="g">G</span><span class="fe">e</span>N</div>
    <div class="footer-links">
      <a href="https://www.linkedin.com/company/nextgen-more-leads-better-results/" target="_blank">LinkedIn</a>
      <a href="#diagnostic">Free Diagnostic</a>
      <a href="#solution">How It Works</a>
      <a href="#cases">Case Studies</a>
    </div>
    <div class="footer-meta">
      Revenue Architecture Company<br>
      Greensboro, NC · São Paulo, BR<br>
      leandro.lopes@nextgleads.com
    </div>
  </footer>
</div>

<!-- Sticky mobile CTA -->
<div class="sticky-cta">
  <a class="sticky-btn" href="#form">Free Diagnostic →</a>
</div>

<script>

</script>
</body>
</html>

