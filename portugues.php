<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NextGen — Construa o Sistema Operacional de Receita da sua Empresa B2B</title>
  <meta name="description" content="Revenue Architecture para empresas B2B industriais e de tecnologia. Ploomes CRM + RD Station + metodologia própria. Diagnóstico gratuito.">
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

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background: var(--dark);
      color: var(--white);
      overflow-x: hidden;
      line-height: 1.6;
    }

    /* ── NAV ── */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
      padding: 0 40px;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: rgba(8, 8, 16, .92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(0, 71, 171, .2);
      transition: all .3s;
    }

    .nav-logo {
      font-size: 22px;
      font-weight: 900;
      letter-spacing: -1px;
      text-decoration: none;
      color: white;
    }

    .nav-logo .g {
      color: var(--blue-light);
    }

    .nav-logo .e {
      color: var(--green);
    }

    .nav-cta {
      padding: 10px 24px;
      background: var(--green);
      color: var(--dark);
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 2px;
      text-decoration: none;
      transition: opacity .2s;
    }

    .nav-cta:hover {
      opacity: .85;
    }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 120px 40px 80px;
      position: relative;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
      background:
        radial-gradient(ellipse 800px 500px at 50% 0%, rgba(0, 71, 171, .25) 0%, transparent 70%),
        radial-gradient(ellipse 400px 300px at 80% 80%, rgba(0, 255, 170, .07) 0%, transparent 60%);
    }

    .hero-grid {
      position: absolute;
      inset: 0;
      z-index: 0;
      background-image:
        linear-gradient(rgba(0, 71, 171, .07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 71, 171, .07) 1px, transparent 1px);
      background-size: 48px 48px;
    }

    .hero-badge {
      position: relative;
      z-index: 2;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: 'Space Mono', monospace;
      font-size: 11px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--green);
      border: 1px solid rgba(0, 255, 170, .25);
      padding: 8px 18px;
      border-radius: 2px;
      margin-bottom: 36px;
      animation: fadeUp .7s ease both;
    }

    .hero-badge::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--green);
      animation: blink 1.5s ease infinite;
    }

    @keyframes blink {

      0%,
      100% {
        opacity: 1
      }

      50% {
        opacity: .2
      }
    }

    .hero-h1 {
      position: relative;
      z-index: 2;
      font-size: clamp(36px, 6vw, 76px);
      font-weight: 900;
      line-height: 1.04;
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
      position: relative;
      z-index: 2;
      font-size: clamp(16px, 2vw, 20px);
      color: rgba(255, 255, 255, .6);
      max-width: 640px;
      font-weight: 400;
      margin-bottom: 52px;
      animation: fadeUp .7s .3s ease both;
      line-height: 1.7;
    }

    .hero-ctas {
      position: relative;
      z-index: 2;
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      justify-content: center;
      animation: fadeUp .7s .45s ease both;
    }

    .btn-hero-primary {
      padding: 18px 48px;
      background: var(--green);
      color: var(--dark);
      font-size: 14px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-radius: 2px;
      border: 2px solid var(--green);
      cursor: pointer;
      text-decoration: none;
      transition: all .2s;
      display: inline-block;
    }

    .btn-hero-primary:hover {
      background: transparent;
      color: var(--green);
    }

    .btn-hero-secondary {
      padding: 18px 40px;
      background: transparent;
      color: rgba(255, 255, 255, .7);
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-radius: 2px;
      border: 2px solid rgba(255, 255, 255, .2);
      cursor: pointer;
      text-decoration: none;
      transition: all .2s;
      display: inline-block;
    }

    .btn-hero-secondary:hover {
      border-color: var(--blue-light);
      color: var(--blue-light);
    }

    .hero-proof {
      position: relative;
      z-index: 2;
      display: flex;
      gap: 48px;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 72px;
      animation: fadeUp .7s .6s ease both;
    }

    .hero-stat {
      text-align: center;
    }

    .hero-stat-num {
      font-size: 36px;
      font-weight: 900;
      letter-spacing: -1px;
      background: linear-gradient(135deg, var(--white), var(--blue-light));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-stat-label {
      font-size: 12px;
      color: rgba(255, 255, 255, .4);
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 4px;
    }

    .hero-divider {
      width: 1px;
      height: 48px;
      background: rgba(255, 255, 255, .1);
      align-self: center;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(24px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ── TICKER ── */
    .ticker {
      background: rgba(0, 71, 171, .12);
      border-top: 1px solid rgba(0, 71, 171, .25);
      border-bottom: 1px solid rgba(0, 71, 171, .25);
      overflow: hidden;
      padding: 14px 0;
    }

    .ticker-inner {
      display: flex;
      gap: 48px;
      white-space: nowrap;
      animation: ticker 25s linear infinite;
    }

    .ticker-item {
      font-family: 'Space Mono', monospace;
      font-size: 11px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: rgba(255, 255, 255, .3);
      flex-shrink: 0;
      padding: 0 24px;
      border-right: 1px solid rgba(255, 255, 255, .08);
    }

    .ticker-item.hot {
      color: var(--green);
    }

    @keyframes ticker {
      from {
        transform: translateX(0)
      }

      to {
        transform: translateX(-50%)
      }
    }

    /* ── SECTIONS SHARED ── */
    .section {
      padding: 100px 40px;
      max-width: 1160px;
      margin: 0 auto;
    }

    .section-label {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--green);
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .section-label::after {
      content: '';
      display: block;
      width: 32px;
      height: 1px;
      background: var(--green);
      opacity: .5;
    }

    .section-h2 {
      font-size: clamp(28px, 4vw, 50px);
      font-weight: 900;
      line-height: 1.1;
      margin-bottom: 20px;
    }

    .section-h2 em {
      font-style: normal;
      color: var(--blue-light);
    }

    .section-body {
      font-size: 17px;
      color: rgba(255, 255, 255, .6);
      max-width: 680px;
      line-height: 1.8;
    }

    .full-divider {
      width: 100%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(0, 71, 171, .4), rgba(0, 255, 170, .2), transparent);
    }

    /* ── PROBLEMA ── */
    .pains-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
      margin-top: 56px;
    }

    .pain-card {
      padding: 36px 32px;
      background: rgba(255, 255, 255, .025);
      border: 1px solid rgba(255, 255, 255, .06);
      position: relative;
      overflow: hidden;
      transition: border-color .3s;
    }

    .pain-card:hover {
      border-color: rgba(0, 71, 171, .4);
    }

    .pain-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--blue), transparent);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .4s;
    }

    .pain-card:hover::after {
      transform: scaleX(1);
    }

    .pain-icon {
      font-size: 28px;
      margin-bottom: 20px;
      display: block;
    }

    .pain-title {
      font-size: 17px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .pain-desc {
      font-size: 14px;
      color: rgba(255, 255, 255, .5);
      line-height: 1.7;
    }

    /* ── SOLUÇÃO ── */
    .solution-wrapper {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
      margin-top: 56px;
    }

    .solution-visual {
      position: relative;
    }

    .solution-arch {
      background: var(--grafite);
      border: 1px solid rgba(0, 71, 171, .3);
      border-radius: 6px;
      overflow: hidden;
    }

    .arch-header {
      background: rgba(0, 71, 171, .15);
      border-bottom: 1px solid rgba(0, 71, 171, .2);
      padding: 16px 24px;
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 3px;
      color: var(--green);
      text-transform: uppercase;
    }

    .arch-block {
      padding: 20px 24px;
      border-bottom: 1px solid rgba(255, 255, 255, .04);
      display: flex;
      align-items: center;
      gap: 16px;
      transition: background .2s;
    }

    .arch-block:hover {
      background: rgba(0, 71, 171, .08);
    }

    .arch-block:last-child {
      border-bottom: none;
    }

    .arch-num {
      width: 28px;
      height: 28px;
      background: rgba(0, 71, 171, .2);
      border: 1px solid rgba(0, 71, 171, .4);
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      color: var(--blue-light);
      flex-shrink: 0;
    }

    .arch-title {
      font-size: 14px;
      font-weight: 700;
    }

    .arch-sub {
      font-size: 12px;
      color: rgba(255, 255, 255, .4);
      margin-top: 2px;
    }

    .solution-points {
      list-style: none;
      margin-top: 0;
    }

    .solution-point {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      padding: 16px 0;
      border-bottom: 1px solid rgba(255, 255, 255, .05);
    }

    .solution-point:last-child {
      border-bottom: none;
    }

    .sp-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--green);
      margin-top: 8px;
      flex-shrink: 0;
    }

    .sp-title {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .sp-desc {
      font-size: 13px;
      color: rgba(255, 255, 255, .5);
      line-height: 1.6;
    }

    /* ── TIERS ── */
    .tiers-section {
      padding: 100px 40px;
      background: rgba(0, 71, 171, .06);
      border-top: 1px solid rgba(0, 71, 171, .15);
      border-bottom: 1px solid rgba(0, 71, 171, .15);
    }

    .tiers-inner {
      max-width: 1160px;
      margin: 0 auto;
    }

    .tiers-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-top: 56px;
    }

    .tier-card {
      padding: 40px 36px;
      border: 1px solid rgba(255, 255, 255, .08);
      background: rgba(8, 8, 16, .6);
      border-radius: 4px;
      position: relative;
      overflow: hidden;
      transition: border-color .3s, transform .3s;
    }

    .tier-card:hover {
      border-color: rgba(0, 71, 171, .5);
      transform: translateY(-4px);
    }

    .tier-card.featured {
      border-color: var(--blue);
      background: rgba(0, 71, 171, .1);
    }

    .tier-badge {
      position: absolute;
      top: 0;
      right: 24px;
      background: var(--green);
      color: var(--dark);
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 5px 12px;
      border-radius: 0 0 4px 4px;
      font-weight: 700;
    }

    .tier-num {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      color: var(--green);
      letter-spacing: 3px;
      margin-bottom: 12px;
    }

    .tier-name {
      font-size: 28px;
      font-weight: 900;
      margin-bottom: 8px;
      letter-spacing: -1px;
    }

    .tier-tagline {
      font-size: 14px;
      color: rgba(255, 255, 255, .5);
      margin-bottom: 28px;
      line-height: 1.5;
    }

    .tier-items {
      list-style: none;
      margin-bottom: 36px;
    }

    .tier-item {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      padding: 8px 0;
      font-size: 14px;
      color: rgba(255, 255, 255, .75);
    }

    .tier-item::before {
      content: '✓';
      color: var(--green);
      font-weight: 700;
      flex-shrink: 0;
      margin-top: 1px;
    }

    /* ── PROOF ── */
    .proof-section {
      padding: 100px 40px;
      max-width: 1160px;
      margin: 0 auto;
    }

    .case-card {
      background: var(--grafite);
      border: 1px solid rgba(0, 71, 171, .25);
      border-left: 4px solid var(--green);
      padding: 48px 56px;
      border-radius: 4px;
      position: relative;
      overflow: hidden;
    }

    .case-card::before {
      content: '"';
      position: absolute;
      top: -30px;
      left: 40px;
      font-size: 200px;
      font-family: Georgia, serif;
      color: rgba(0, 71, 171, .15);
      line-height: 1;
      pointer-events: none;
    }

    .case-company {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 4px;
      color: var(--green);
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .case-quote {
      font-size: clamp(18px, 2.5vw, 26px);
      font-weight: 700;
      line-height: 1.45;
      margin-bottom: 36px;
      position: relative;
      z-index: 2;
    }

    .case-stats {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
    }

    .case-stat-num {
      font-size: 36px;
      font-weight: 900;
      background: linear-gradient(135deg, var(--blue-light), var(--green));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .case-stat-label {
      font-size: 12px;
      color: rgba(255, 255, 255, .45);
      margin-top: 4px;
      letter-spacing: 1px;
    }

    /* ── FOUNDERS ── */
    .founders-section {
      padding: 100px 40px;
      background: rgba(13, 13, 26, .8);
      border-top: 1px solid rgba(255, 255, 255, .06);
    }

    .founders-inner {
      max-width: 1160px;
      margin: 0 auto;
    }

    .founders-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
      margin-top: 56px;
    }

    .founder-card {
      padding: 36px;
      border: 1px solid rgba(255, 255, 255, .07);
      border-radius: 4px;
      transition: border-color .3s;
    }

    .founder-card:hover {
      border-color: rgba(0, 71, 171, .4);
    }

    .founder-avatar {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: rgba(0, 71, 171, .2);
      border: 2px solid rgba(0, 71, 171, .4);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      font-weight: 900;
      color: var(--blue-light);
      margin-bottom: 20px;
      font-family: 'Space Mono', monospace;
    }

    .founder-name {
      font-size: 18px;
      font-weight: 800;
      margin-bottom: 4px;
    }

    .founder-role {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 2px;
      color: var(--green);
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .founder-bio {
      font-size: 14px;
      color: rgba(255, 255, 255, .5);
      line-height: 1.7;
    }

    /* ── DIAGNOSTIC CTA ── */
    .diag-section {
      padding: 100px 40px;
      max-width: 860px;
      margin: 0 auto;
      text-align: center;
    }

    .diag-label {
      display: inline-block;
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--green);
      border: 1px solid rgba(0, 255, 170, .2);
      padding: 8px 16px;
      border-radius: 2px;
      margin-bottom: 36px;
    }

    .diag-h2 {
      font-size: clamp(32px, 5vw, 60px);
      font-weight: 900;
      line-height: 1.07;
      margin-bottom: 24px;
    }

    .diag-h2 em {
      font-style: normal;
      color: var(--green);
    }

    .diag-sub {
      font-size: 17px;
      color: rgba(255, 255, 255, .6);
      margin-bottom: 52px;
      line-height: 1.7;
      max-width: 640px;
      margin-left: auto;
      margin-right: auto;
    }

    .diag-items {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
      text-align: left;
      margin-bottom: 48px;
    }

    .diag-item {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      padding: 20px;
      background: rgba(0, 71, 171, .08);
      border: 1px solid rgba(0, 71, 171, .2);
      border-radius: 4px;
    }

    .diag-check {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: rgba(0, 255, 170, .1);
      border: 1px solid rgba(0, 255, 170, .3);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--green);
      font-size: 13px;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .diag-text {
      font-size: 14px;
      font-weight: 600;
      line-height: 1.5;
    }

    .diag-caveat {
      font-size: 13px;
      color: rgba(255, 255, 255, .35);
      margin-top: 20px;
      font-style: italic;
    }

    /* ── FORM ── */
    .form-section {
      padding: 80px 40px 120px;
      max-width: 640px;
      margin: 0 auto;
    }

    .form-box {
      background: var(--grafite);
      border: 1px solid rgba(0, 71, 171, .3);
      padding: 52px;
      border-radius: 6px;
    }

    .form-title {
      font-size: 24px;
      font-weight: 800;
      margin-bottom: 8px;
      text-align: center;
    }

    .form-subtitle {
      font-size: 14px;
      color: rgba(255, 255, 255, .5);
      text-align: center;
      margin-bottom: 36px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: rgba(255, 255, 255, .5);
      margin-bottom: 8px;
    }

    .form-input,
    .form-select {
      width: 100%;
      padding: 14px 18px;
      background: rgba(255, 255, 255, .05);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: 3px;
      color: white;
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      transition: border-color .2s;
      outline: none;
      appearance: none;
    }

    .form-input:focus,
    .form-select:focus {
      border-color: var(--blue-light);
    }

    .form-input::placeholder {
      color: rgba(255, 255, 255, .2);
    }

    .form-select option {
      background: var(--grafite);
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .form-submit {
      width: 100%;
      padding: 18px;
      background: var(--green);
      color: var(--dark);
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 2px;
      border: 2px solid var(--green);
      border-radius: 2px;
      cursor: pointer;
      transition: all .2s;
      margin-top: 8px;
    }

    .form-submit:hover {
      background: transparent;
      color: var(--green);
    }

    .form-trust {
      display: flex;
      gap: 24px;
      justify-content: center;
      margin-top: 24px;
      flex-wrap: wrap;
    }

    .trust-item {
      font-size: 12px;
      color: rgba(255, 255, 255, .3);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    /* ── FAQ ── */
    .faq-section {
      padding: 80px 40px;
      max-width: 800px;
      margin: 0 auto;
    }

    .faq-item {
      border-bottom: 1px solid rgba(255, 255, 255, .07);
      overflow: hidden;
    }

    .faq-q {
      width: 100%;
      text-align: left;
      padding: 24px 0;
      background: transparent;
      border: none;
      color: white;
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
    }

    .faq-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: rgba(0, 71, 171, .2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      color: var(--green);
      flex-shrink: 0;
      transition: transform .3s;
    }

    .faq-item.open .faq-icon {
      transform: rotate(45deg);
    }

    .faq-a {
      font-size: 15px;
      color: rgba(255, 255, 255, .55);
      line-height: 1.8;
      max-height: 0;
      overflow: hidden;
      transition: max-height .4s ease, padding .3s;
    }

    .faq-item.open .faq-a {
      max-height: 200px;
      padding-bottom: 24px;
    }

    /* ── FOOTER ── */
    footer {
      background: rgba(0, 0, 0, .5);
      border-top: 1px solid rgba(255, 255, 255, .06);
      padding: 48px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 24px;
      max-width: 1160px;
      margin: 0 auto;
    }

    .footer-logo {
      font-size: 26px;
      font-weight: 900;
      letter-spacing: -1px;
    }

    .footer-logo .g {
      color: var(--blue-light);
    }

    .footer-logo .fe {
      color: var(--green);
    }

    .footer-links {
      display: flex;
      gap: 32px;
      flex-wrap: wrap;
    }

    .footer-links a {
      font-size: 13px;
      color: rgba(255, 255, 255, .35);
      text-decoration: none;
      transition: color .2s;
    }

    .footer-links a:hover {
      color: var(--blue-light);
    }

    .footer-meta {
      font-family: 'Space Mono', monospace;
      font-size: 11px;
      color: rgba(255, 255, 255, .2);
      line-height: 1.8;
      text-align: right;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .pains-grid {
        grid-template-columns: 1fr 1fr;
      }

      .solution-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .tiers-grid,
      .founders-grid {
        grid-template-columns: 1fr;
      }

      .diag-items {
        grid-template-columns: 1fr;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .case-stats {
        gap: 24px;
      }

      nav {
        padding: 0 20px;
      }
    }

    @media (max-width: 600px) {
      .pains-grid {
        grid-template-columns: 1fr;
      }

      .hero,
      .section,
      .tiers-section,
      .proof-section,
      .founders-section,
      .diag-section,
      .form-section,
      .faq-section {
        padding-left: 20px;
        padding-right: 20px;
      }

      .case-card {
        padding: 32px 24px;
      }

      .form-box {
        padding: 32px 24px;
      }
    }

    /* ── WHATSAPP BTN ── */
    .btn-whatsapp {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: 100%;
      padding: 16px;
      background: #25D366;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 2px;
      text-decoration: none;
      transition: opacity .2s;
      margin-top: 16px;
    }

    .btn-whatsapp:hover {
      opacity: .88;
    }

    /* ── STICKY CTA BOTTOM MOBILE ── */
    .sticky-cta {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 998;
      background: var(--dark);
      border-top: 1px solid rgba(0, 71, 171, .3);
      padding: 16px 20px;
    }

    @media (max-width: 768px) {
      .sticky-cta {
        display: block;
      }
    }

    .sticky-btn {
      display: block;
      width: 100%;
      padding: 16px;
      text-align: center;
      background: var(--green);
      color: var(--dark);
      font-weight: 800;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-radius: 2px;
      text-decoration: none;
    }
  </style>


  <script
    src="https://code.jquery.com/jquery-4.0.0.slim.min.js"
    integrity="sha256-8DGpv13HIm+5iDNWw1XqxgFB4mj+yOKFNb+tHBZOowc="
    crossorigin="anonymous"></script>

</head>

<body>

  <!-- NAV -->
  <nav>
    <a class="nav-logo" href="#">Next<span class="g">G</span><span class="e">e</span>N</a>
    <a class="nav-cta" href="#form">Diagnóstico Gratuito</a>
  </nav>

  <!-- ═══ HERO ═══ -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>

    <div class="hero-badge">Revenue Architecture Company · Ploomes + RD Station</div>

    <h1 class="hero-h1">
      A próxima geração de<br>empresas B2B já opera<br><em>diferente.</em>
    </h1>

    <p class="hero-sub">
      Construímos o sistema operacional de receita das empresas B2B industriais e de tecnologia
      — integrando CRM, processos, automação e inteligência para gerar crescimento previsível.
    </p>

    <div class="hero-ctas">
      <a href="#form" class="btn-hero-primary">Quero meu Diagnóstico Gratuito</a>
      <a href="#solucao" class="btn-hero-secondary">Como funciona</a>
    </div>

    <div class="hero-proof">
      <div class="hero-stat">
        <div class="hero-stat-num">30k+</div>
        <div class="hero-stat-label">Clientes migrados</div>
      </div>
      <div class="hero-divider"></div>
      <div class="hero-stat">
        <div class="hero-stat-num">−60%</div>
        <div class="hero-stat-label">Tempo de proposta CPQ</div>
      </div>
      <div class="hero-divider"></div>
      <div class="hero-stat">
        <div class="hero-stat-num">28+</div>
        <div class="hero-stat-label">Anos em vendas B2B</div>
      </div>
      <div class="hero-divider"></div>
      <div class="hero-stat">
        <div class="hero-stat-num">3x</div>
        <div class="hero-stat-label">Conversão de leads</div>
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
      <span class="ticker-item hot">Pipeline Previsível</span>
      <span class="ticker-item">RevOps B2B</span>
      <span class="ticker-item hot">CPQ Automático</span>
      <span class="ticker-item">Greensboro NC · São Paulo BR</span>
      <span class="ticker-item hot">Launch → Growth → Scale</span>
      <span class="ticker-item">Especialistas Certificados</span>
      <span class="ticker-item hot">Revenue Architecture</span>
      <span class="ticker-item">Ploomes CRM</span>
      <span class="ticker-item hot">RD Station</span>
      <span class="ticker-item">Sales Engagement</span>
      <span class="ticker-item hot">Pipeline Previsível</span>
      <span class="ticker-item">RevOps B2B</span>
      <span class="ticker-item hot">CPQ Automático</span>
      <span class="ticker-item">Greensboro NC · São Paulo BR</span>
      <span class="ticker-item hot">Launch → Growth → Scale</span>
      <span class="ticker-item">Especialistas Certificados</span>
    </div>
  </div>

  <!-- ═══ PROBLEMA ═══ -->
  <section class="section" id="problema">
    <div class="section-label">O problema que custou receita hoje</div>
    <h2 class="section-h2">Você não tem problema<br>de <em>ferramenta.</em><br>Tem problema de arquitetura.</h2>
    <p class="section-body">
      A maioria das empresas B2B já tem um CRM. Mas ele não é usado direito, o pipeline é cheio de
      fantasmas e o forecast nunca fecha. O problema não é o software — é a falta de estrutura
      operacional em torno dele.
    </p>

    <div class="pains-grid">
      <div class="pain-card">
        <span class="pain-icon">📊</span>
        <div class="pain-title">Pipeline que não reflete a realidade</div>
        <div class="pain-desc">Oportunidades "em negociação" há meses. Forecast que erra todo mês. Reuniões de pipeline baseadas em feeling.</div>
      </div>
      <div class="pain-card">
        <span class="pain-icon">📨</span>
        <div class="pain-title">Follow-ups que se perdem</div>
        <div class="pain-desc">Vendas que poderiam ter fechado escaparam porque alguém esqueceu de dar retorno. Receita que evaporou pela falta de cadência.</div>
      </div>
      <div class="pain-card">
        <span class="pain-icon">🔧</span>
        <div class="pain-title">CRM implementado, pouco adotado</div>
        <div class="pain-desc">O sistema existe mas o time não usa. Cada vendedor tem seu próprio jeito. A informação está espalhada em planilhas e WhatsApp.</div>
      </div>
      <div class="pain-card">
        <span class="pain-icon">⏱</span>
        <div class="pain-title">Propostas lentas e imprecisas</div>
        <div class="pain-desc">Um cliente pede proposta e você demora dias para entregar. Sem CPQ, sem automação — e o concorrente chegou antes.</div>
      </div>
      <div class="pain-card">
        <span class="pain-icon">📉</span>
        <div class="pain-title">Marketing e vendas desconectados</div>
        <div class="pain-desc">Você investe em geração de leads mas eles se perdem no caminho. Não há scoring, não há roteamento, não há handoff eficiente.</div>
      </div>
      <div class="pain-card">
        <span class="pain-icon">🔄</span>
        <div class="pain-title">Dependência de vendedor estrela</div>
        <div class="pain-desc">A operação depende de 1 ou 2 pessoas que "carregam no colo". Se eles saírem, a receita vai junto. Não há processo escalável.</div>
      </div>
    </div>
  </section>

  <div class="full-divider"></div>

  <!-- ═══ SOLUÇÃO ═══ -->
  <section class="section" id="solucao">
    <div class="section-label">A solução</div>
    <h2 class="section-h2">Revenue Architecture:<br><em>o sistema operacional</em><br>do crescimento B2B</h2>
    <p class="section-body">
      Não implementamos software. Construímos a operação comercial completa — estratégia,
      processo, tecnologia e dados integrados numa arquitetura que gera crescimento previsível.
    </p>

    <div class="solution-wrapper">
      <div class="solution-visual">
        <div class="solution-arch">
          <div class="arch-header">NextGen Revenue Architecture™</div>
          <div class="arch-block">
            <div class="arch-num">01</div>
            <div>
              <div class="arch-title">CRM Strategy Design</div>
              <div class="arch-sub">Jornada, ICP, funil e KPIs antes de qualquer ferramenta</div>
            </div>
          </div>
          <div class="arch-block">
            <div class="arch-num">02</div>
            <div>
              <div class="arch-title">Revenue Operations</div>
              <div class="arch-sub">Governança de dados, SLA mkt→vendas, cadência operacional</div>
            </div>
          </div>
          <div class="arch-block">
            <div class="arch-num">03</div>
            <div>
              <div class="arch-title">Sales Engagement</div>
              <div class="arch-sub">Lead scoring, automações, cadências e CPQ de propostas</div>
            </div>
          </div>
          <div class="arch-block">
            <div class="arch-num">04</div>
            <div>
              <div class="arch-title">Customer Revenue</div>
              <div class="arch-sub">Onboarding, expansão, retenção e LTV estruturados</div>
            </div>
          </div>
        </div>
        <div style="margin-top:16px; padding:20px; background:rgba(0,255,170,.05); border:1px solid rgba(0,255,170,.15); border-radius:4px; text-align:center;">
          <div style="font-family:'Space Mono',monospace; font-size:10px; letter-spacing:3px; color:var(--green); margin-bottom:8px;">PLATAFORMAS</div>
          <div style="font-size:13px; color:rgba(255,255,255,.6);">Ploomes CRM · RD Station · n8n · WhatsApp Business · ERP Protheus / SAP</div>
        </div>
      </div>

      <ul class="solution-points">
        <li class="solution-point">
          <div class="sp-dot"></div>
          <div>
            <div class="sp-title">Estratégia antes de ferramenta</div>
            <div class="sp-desc">Primeiro definimos processo, jornada e ICP. Só então configuramos a tecnologia. CRM sem estratégia é banco de dados caro.</div>
          </div>
        </li>
        <li class="solution-point">
          <div class="sp-dot"></div>
          <div>
            <div class="sp-title">Especialistas certificados Ploomes + RD Station</div>
            <div class="sp-desc">Somos parceiros oficiais das duas plataformas líderes para B2B no Brasil. Profundidade real, sem improviso.</div>
          </div>
        </li>
        <li class="solution-point">
          <div class="sp-dot"></div>
          <div>
            <div class="sp-title">Modelo evolutivo com ROI em cada etapa</div>
            <div class="sp-desc">Cada tier entrega resultado mensurável antes de avançar. Você não espera meses para ver retorno.</div>
          </div>
        </li>
        <li class="solution-point">
          <div class="sp-dot"></div>
          <div>
            <div class="sp-title">Parceria de evolução, não projeto pontual</div>
            <div class="sp-desc">Acompanhamos do estágio 1 ao Scale. O cliente cresce e a NextGen evolui junto — contratos recorrentes, resultado contínuo.</div>
          </div>
        </li>
        <li class="solution-point">
          <div class="sp-dot"></div>
          <div>
            <div class="sp-title">28+ anos de DNA em vendas B2B complexas</div>
            <div class="sp-desc">O time fundador viveu o problema antes de construir a solução. Experiência real em vendas consultivas, ciclos longos e múltiplos decisores.</div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ═══ TIERS ═══ -->
  <div class="tiers-section">
    <div class="tiers-inner">
      <div class="section-label">Como começamos</div>
      <h2 class="section-h2">Três tiers de evolução.<br><em>ROI em cada etapa.</em></h2>
      <p class="section-body">
        Você não precisa virar tudo de cabeça para baixo. Começamos estruturando a base
        e evoluímos conforme a operação amadurece.
      </p>

      <div class="tiers-grid">
        <div class="tier-card">
          <div class="tier-num">TIER 01 —</div>
          <div class="tier-name">Launch</div>
          <div class="tier-tagline">Estruturação inicial: sair das planilhas para operar com processo e visibilidade real.</div>
          <ul class="tier-items">
            <li class="tier-item">Setup completo Ploomes + RD Station</li>
            <li class="tier-item">Pipeline padronizado com metodologia</li>
            <li class="tier-item">Organização e migração de dados</li>
            <li class="tier-item">Treinamento e adoção do time</li>
            <li class="tier-item">Diagnóstico estratégico inicial</li>
          </ul>
        </div>

        <div class="tier-card featured">
          <div class="tier-badge">Mais escolhido</div>
          <div class="tier-num">TIER 02 —</div>
          <div class="tier-name">Growth</div>
          <div class="tier-tagline">Escala operacional: automações, integrações e cadência comercial funcionando.</div>
          <ul class="tier-items">
            <li class="tier-item">Tudo do Launch +</li>
            <li class="tier-item">Automações e lead scoring</li>
            <li class="tier-item">Integração Ploomes + RD Station + ERP</li>
            <li class="tier-item">Dashboards com KPIs e forecast</li>
            <li class="tier-item">Cadência de prospecção ativa</li>
          </ul>
        </div>

        <div class="tier-card">
          <div class="tier-num">TIER 03 —</div>
          <div class="tier-name">Scale</div>
          <div class="tier-tagline">Inteligência: CPQ, BI avançado e previsibilidade de receita sustentável.</div>
          <ul class="tier-items">
            <li class="tier-item">Tudo do Growth +</li>
            <li class="tier-item">CPQ para propostas automáticas</li>
            <li class="tier-item">BI avançado e Revenue Intelligence</li>
            <li class="tier-item">Integração ERP + WhatsApp + omnichannel</li>
            <li class="tier-item">RevOps as a Service contínuo</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══ CASE ═══ -->
  <section class="proof-section" id="cases">
    <div class="section-label">Prova real</div>
    <h2 class="section-h2" style="margin-bottom:40px">Funciona na <em>prática.</em></h2>

    <div class="case-card">
      <div class="case-company">Case · Sunnyvale — Máquinas e Equipamentos Industriais</div>
      <div class="case-quote">
        "De planilhas e caos para governança comercial total com 30.000 clientes,
        200+ SKUs em famílias e 24 representantes operando no mesmo sistema —
        com CPQ, múltiplos funis e forecast confiável."
      </div>
      <div class="case-stats">
        <div>
          <div class="case-stat-num">30.000+</div>
          <div class="case-stat-label">Clientes migrados</div>
        </div>
        <div>
          <div class="case-stat-num">60</div>
          <div class="case-stat-label">Usuários ativos</div>
        </div>
        <div>
          <div class="case-stat-num">24</div>
          <div class="case-stat-label">Representantes</div>
        </div>
        <div>
          <div class="case-stat-num">−60%</div>
          <div class="case-stat-label">Tempo de proposta CPQ</div>
        </div>
        <div>
          <div class="case-stat-num">100%</div>
          <div class="case-stat-label">Governança comercial</div>
        </div>
      </div>
    </div>

    <div style="margin-top:24px; padding:32px 40px; border:1px solid rgba(255,255,255,.07); border-radius:4px; display:flex; align-items:center; gap:32px; flex-wrap:wrap;">
      <div style="flex:1; min-width:260px;">
        <div style="font-family:'Space Mono',monospace; font-size:10px; letter-spacing:3px; color:var(--green); margin-bottom:12px;">CASE · LUDO PARA EMPRESAS</div>
        <div style="font-size:15px; font-weight:600; line-height:1.6;">Migração do Agendor para Ploomes em cenário de dados fragmentados — centralização total e visibilidade de pipeline com vendas consultivas em T&D corporativo.</div>
      </div>
      <div style="display:flex; gap:32px; flex-wrap:wrap;">
        <div style="text-align:center;">
          <div style="font-size:28px; font-weight:900; color:var(--blue-light);">100%</div>
          <div style="font-size:11px; color:rgba(255,255,255,.4);">Dados centralizados</div>
        </div>
        <div style="text-align:center;">
          <div style="font-size:28px; font-weight:900; color:var(--blue-light);">3x</div>
          <div style="font-size:11px; color:rgba(255,255,255,.4);">Conversão de leads</div>
        </div>
      </div>
    </div>
  </section>

  <div class="full-divider"></div>

  <!-- ═══ FOUNDERS ═══ -->
  <div class="founders-section">
    <div class="founders-inner">
      <div class="section-label">Quem constrói com você</div>
      <h2 class="section-h2">Time fundador com<br><em>DNA comercial real.</em></h2>
      <p class="section-body">
        Não somos consultores que nunca venderam. Somos profissionais que viveram as dores
        que resolvemos — e construíram a NextGen para colocar esse conhecimento em arquitetura.
      </p>

      <div class="founders-grid">
        <div class="founder-card">
          <div class="founder-avatar">LL</div>
          <div class="founder-name">Leandro Lopes</div>
          <div class="founder-role">GTM & Sales Strategy</div>
          <div class="founder-bio">20+ anos em vendas B2B complexas. Liderou operações comerciais em empresas de tecnologia e serviços. Especialista em Revenue Architecture e Sales Engagement com foco em resultados mensuráveis.</div>
        </div>
        <div class="founder-card">
          <div class="founder-avatar">RB</div>
          <div class="founder-name">Rodrigo Baracho</div>
          <div class="founder-role">Customer Success & RevOps</div>
          <div class="founder-bio">Especialista em CRM Engagement, retenção e expansão de contas estratégicas. Experiência internacional e multicultural em operações B2B complexas e governança de dados comerciais.</div>
        </div>
        <div class="founder-card">
          <div class="founder-avatar">LY</div>
          <div class="founder-name">Léo Yanaguihara</div>
          <div class="founder-role">CRM Architect & SaaS Implementation</div>
          <div class="founder-bio">Senior Partner Ploomes. Arquitetura CRM e CPQ. Automação de processos. Formação Front-end & UX pela USP. Metodologia própria de implantação SaaS para empresas B2B complexas.</div>
        </div>
      </div>

      <div style="margin-top:48px; padding:32px; background:rgba(0,71,171,.08); border:1px solid rgba(0,71,171,.2); border-radius:4px; text-align:center;">
        <div style="font-size:16px; color:rgba(255,255,255,.6); max-width:640px; margin:0 auto; line-height:1.7;">
          Parceiros oficiais <strong style="color:white">Ploomes CRM</strong> e <strong style="color:white">RD Station</strong> —
          as plataformas líderes para vendas B2B complexas no Brasil.
          Profundidade técnica real, certificação e acesso direto às roadmaps dos parceiros.
        </div>
      </div>
    </div>
  </div>

  <!-- ═══ DIAGNÓSTICO CTA ═══ -->
  <section class="diag-section" id="diagnostico">
    <div class="diag-label">Próximo passo</div>
    <h2 class="diag-h2">
      Diagnóstico RevOps<br><em>Gratuito.</em><br>45 minutos. Só valor.
    </h2>
    <p class="diag-sub">
      Uma sessão com um especialista NextGen para mapear onde sua operação está travando e
      o que fazer nos próximos 30 dias. Sem compromisso. Sem pitch de vendas.
    </p>

    <div class="diag-items">
      <div class="diag-item">
        <div class="diag-check">✓</div>
        <div class="diag-text">Análise do estágio de maturidade comercial atual</div>
      </div>
      <div class="diag-item">
        <div class="diag-check">✓</div>
        <div class="diag-text">Identificação dos 3 maiores gargalos que travam o crescimento</div>
      </div>
      <div class="diag-item">
        <div class="diag-check">✓</div>
        <div class="diag-text">Roadmap personalizado Launch → Growth → Scale</div>
      </div>
      <div class="diag-item">
        <div class="diag-check">✓</div>
        <div class="diag-text">Recomendações práticas para implementar em 30 dias</div>
      </div>
    </div>

    <a href="#form" class="btn-hero-primary" style="display:inline-block;">Agendar meu Diagnóstico Gratuito →</a>
    <div class="diag-caveat">Vagas limitadas · Para empresas B2B que faturam acima de R$ 3M/ano com time comercial ativo</div>
  </section>

  <!-- ═══ FORM ═══ -->
  <section class="form-section" id="form">

    <form action="mail.php" method="POST">
      <div class="form-box">
        <div class="form-title">Fale com um especialista</div>
        <div class="form-subtitle">Preencha abaixo e entraremos em contato em até 1 dia útil para agendar seu diagnóstico.</div>

        <div class="form-group">
          <label class="form-label">Nome completo *</label>
          <input class="form-input" id="nomeCompleto" type="text" placeholder="Seu nome">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">E-mail corporativo *</label>
            <input class="form-input" id="email" type="email" placeholder="voce@empresa.com">
          </div>
          <div class="form-group">
            <label class="form-label">WhatsApp *</label>
            <input class="form-input" id="whatsapp" type="tel" placeholder="+55 (11) 99999-9999">
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Empresa *</label>
          <input class="form-input" id="empresa" type="text" placeholder="Nome da empresa">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Cargo *</label>
            <select class="form-select" id="cargo">
              <option value="" disabled selected>Selecione</option>
              <option>CEO / Fundador</option>
              <option>Diretor Comercial</option>
              <option>Gerente de Vendas</option>
              <option>Head de Operações</option>
              <option>Head de Marketing</option>
              <option>Outro</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Faturamento anual *</label>
            <select class="form-select" id="faturamento">
              <option value="" disabled selected>Selecione</option>
              <!-- <option>R$ 3M – R$ 10M</option> -->
              <option>Outros</option>
              <option>R$ 10M – R$ 30M</option>
              <option>R$ 30M – R$ 100M</option>
              <option>Acima de R$ 100M</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Setor *</label>
          <select class="form-select" id="setor">
            <option value="" disabled selected>Selecione seu setor</option>
            <option>Indústria Manufatureira</option>
            <option>Distribuição B2B</option>
            <option>Serviços Técnicos / Industriais</option>
            <option>Tecnologia B2B</option>
            <option>Agência de Marketing</option>
            <option>Contabilidade / BPO</option>
            <option>Outro B2B</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label">Qual sua maior dor hoje?</label>
          <input class="form-input" type="text" id="dor" placeholder="Ex: Pipeline desorganizado, follow-ups perdidos...">
        </div>

        <button class="form-submit">Quero meu Diagnóstico Gratuito →</button>

        <div style="display:flex; align-items:center; gap:16px; margin-top:20px;">
          <div style="flex:1; height:1px; background:rgba(255,255,255,.08);"></div>
          <span style="font-size:12px; color:rgba(255,255,255,.25); font-family:'Space Mono',monospace; letter-spacing:2px;">OU</span>
          <div style="flex:1; height:1px; background:rgba(255,255,255,.08);"></div>
        </div>

        <a href="https://wa.me/5511988282177?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%20NextGen%20e%20quero%20agendar%20um%20diagn%C3%B3stico%20gratuito." target="_blank" class="btn-whatsapp">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
          </svg>
          Falar no WhatsApp agora
        </a>


        <div class="form-trust">
          <span class="trust-item">🔒 Sem spam</span>
          <span class="trust-item">⚡ Resposta em 1 dia útil</span>
          <span class="trust-item">✓ Sem compromisso</span>
        </div>

      </div>
    </form>
  </section>


  <script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="javascript/form.js"></script>



  <div class="full-divider"></div>

  <!-- ═══ FAQ ═══ -->
  <section class="faq-section">
    <div class="section-label">Dúvidas frequentes</div>
    <h2 class="section-h2" style="margin-bottom:40px">Perguntas que a<br>gente já ouviu antes.</h2>

    <div class="faq-item">
      <button class="faq-q">
        Já temos um CRM. A NextGen ainda faz sentido para nós?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Sim — e provavelmente é o cenário mais comum. Ter CRM sem processo estruturado é a principal
        dor que resolvemos. Fazemos o diagnóstico da operação atual e construímos a arquitetura
        correta em cima do que você já tem, sem jogar fora o que funciona.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Somos uma empresa pequena. Conseguimos contratar a NextGen?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Atendemos empresas B2B que faturam acima de R$ 3M/ano com time comercial ativo. O Tier 1 Launch
        foi desenhado exatamente para PMEs que precisam estruturar a base sem investimento massivo.
        O modelo evolutivo garante que você pague pelo que está pronto para usar.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Qual o prazo para ver resultado?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        O Tier 1 Launch entrega estrutura operacional em 60–90 dias. Resultados mensuráveis
        em pipeline organizado, propostas mais rápidas e adoção do time aparecem antes disso.
        Cada tier tem entregas claras e ROI mensurável antes de avançar.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Precisamos usar Ploomes e RD Station?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Somos especialistas certificados nessas duas plataformas e elas formam o ecossistema
        mais completo para B2B complexo no Brasil. No diagnóstico avaliamos sua situação atual —
        se você já usa outras ferramentas, discutimos a migração ou integração mais adequada.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        O que acontece depois do diagnóstico gratuito?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Você recebe um diagnóstico honesto da sua operação e um roadmap personalizado — mesmo
        que não contrate a NextGen. Se fizer sentido avançar juntos, apresentamos a proposta
        do tier adequado para o seu momento. Sem pressão, sem pitch agressivo.
      </div>
    </div>
  </section>

  <!-- ═══ FOOTER ═══ -->
  <div style="background:rgba(0,0,0,.4); border-top:1px solid rgba(255,255,255,.06);">
    <footer>
      <div class="footer-logo">Next<span class="g">G</span><span class="fe">e</span>N</div>
      <div class="footer-links">
        <a href="https://www.linkedin.com/company/nextgen-more-leads-better-results/" target="_blank">LinkedIn</a>
        <a href="#diagnostico">Diagnóstico Gratuito</a>
        <a href="#solucao">Como Funciona</a>
        <a href="#cases">Cases</a>
      </div>
      <div class="footer-meta">
        Revenue Architecture Company<br>
        Greensboro, NC · São Paulo, BR<br>
        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e3efeef4e1f4efc0eee5f8f4e7ece5e1e4f3aee3efed">[email&#160;protected]</a>
      </div>
    </footer>
  </div>

  <!-- Sticky mobile CTA -->
  <div class="sticky-cta">
    <a class="sticky-btn" href="#form">Diagnóstico Gratuito →</a>
  </div>






  <script>
    document.addEventListener('DOMContentLoaded', function() {

      // ── FAQ accordion ──
      document.querySelectorAll('.faq-q').forEach(function(btn) {
        btn.addEventListener('click', function() {
          var item = this.closest('.faq-item');
          var wasOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(function(i) {
            i.classList.remove('open');
          });
          if (!wasOpen) item.classList.add('open');
        });
      });


      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/

      document.addEventListener('DOMContentLoaded', function() {

        // ── SUBMIT HANDLER ──
        async function handleSubmit(e) {

          console.log("apenas testando ok");

          e.preventDefault();

          const btn = document.querySelector('.form-submit');
          btn.disabled = true;
          btn.textContent = 'Enviando...';

          try {
            const inputs = document.querySelectorAll('.form-input');
            const selects = document.querySelectorAll('.form-select');

            const nome = inputs[0]?.value.trim() || '';
            const email = inputs[1]?.value.trim() || '';
            const tel = inputs[2]?.value.trim() || '';
            const empresa = inputs[3]?.value.trim() || '';
            const dor = inputs[4]?.value.trim() || '';
            const cargo = selects[0]?.value || '';
            const fat = selects[1]?.value || '';
            const setor = selects[2]?.value || '';

            if (!nome || !email || !empresa) {
              alert('Por favor preencha Nome, E-mail e Empresa.');
              btn.disabled = false;
              btn.textContent = 'Quero meu Diagnóstico Gratuito →';
              return;
            }

            const subject = encodeURIComponent(`[NextGen] Diagnóstico Gratuito — ${nome} (${empresa})`);

            const body = encodeURIComponent(
              `Novo lead via Landing Page NextGen

Nome: ${nome}
E-mail: ${email}
WhatsApp: ${tel}
Empresa: ${empresa}
Cargo: ${cargo}
Faturamento: ${fat}
Setor: ${setor}
Maior dor: ${dor}

---
Enviado pelo formulário nextgen.com.br`
            );

            // ── AJAX ──
            const response = await fetch('mail.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                nome,
                email,
                tel,
                empresa,
                dor,
                cargo,
                fat,
                setor
              })
            });

            if (!response.ok) {
              throw new Error(`HTTP error: ${response.status}`);
            }

            const data = await response.json();

            console.log('Resposta do servidor:', data.resposta);

            // ── UX SUCESSO ──
            btn.textContent = '✓ Dados enviados! Abrindo seu e-mail...';
            btn.style.background = 'var(--green-dark)';
            btn.style.borderColor = 'var(--green-dark)';
            btn.style.color = 'white';

            // pequeno delay para UX
            setTimeout(() => {
              window.location.href = `mailto:leandro.lopes@nextgleads.com?subject=${subject}&body=${body}`;
            }, 800);

          } catch (error) {
            console.error('Erro:', error);

            alert('Erro ao enviar. Tente novamente.');

            btn.disabled = false;
            btn.textContent = 'Quero meu Diagnóstico Gratuito →';
          }
        }

        // ── EVENTO DO BOTÃO ──
        document.addEventListener('DOMContentLoaded', function() {
          console.log("JS carregou 🔥");

          const btn = document.querySelector('.form-submit');
          console.log("Botão encontrado:", btn);

          if (btn) {
            btn.addEventListener('click', function() {
              console.log("CLICK FUNCIONOU ✅");
              alert("Botão clicado!");
            });
          } else {
            console.log("Botão NÃO encontrado ❌");
          }
        });


        // ── FAQ ──
        document.querySelectorAll('.faq-q').forEach(function(btn) {
          btn.addEventListener('click', function() {
            const item = this.closest('.faq-item');
            const wasOpen = item.classList.contains('open');

            document.querySelectorAll('.faq-item')
              .forEach(i => i.classList.remove('open'));

            if (!wasOpen) item.classList.add('open');
          });
        });


        // ── REVEAL ON SCROLL ──
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            if (e.isIntersecting) {
              e.target.style.opacity = '1';
              e.target.style.transform = 'translateY(0)';
            }
          });
        }, {
          threshold: 0.1
        });

        document.querySelectorAll('.pain-card, .tier-card, .founder-card, .arch-block')
          .forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity .5s ease, transform .5s ease';
            observer.observe(el);
          });

      });


      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/
      /**************************************************************************************************/

      // Reveal on scroll
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.style.opacity = '1';
            e.target.style.transform = 'translateY(0)';
          }
        });
      }, {
        threshold: 0.1
      });

      document.querySelectorAll('.pain-card, .tier-card, .founder-card, .arch-block').forEach(function(el) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity .5s ease, transform .5s ease';
        observer.observe(el);
      });

    }); // DOMContentLoaded
  </script>
</body>

</html>