<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Group Discussion - Sensus Ekonomi 2026 | BPS Kota Batam</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes glow {
            0%, 100% {
                box-shadow: 0 6px 20px rgba(166, 80, 85, 0.35);
            }
            50% {
                box-shadow: 0 6px 30px rgba(166, 80, 85, 0.5);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: url('{{ asset('bgse.png') }}') center center / cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.3) 0%, rgba(118, 75, 162, 0.3) 25%, rgba(240, 147, 251, 0.3) 50%, rgba(79, 172, 254, 0.3) 100%);
            background-size: 400% 400%;
            animation: gradientShift 20s ease infinite;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(255, 107, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 193, 7, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(102, 126, 234, 0.08) 0%, transparent 50%);
            pointer-events: none;
            animation: float 10s ease-in-out infinite;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(25px) saturate(180%);
            border-radius: 32px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.2);
            overflow: hidden;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .container:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 35px 120px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(255, 255, 255, 0.3);
        }

        .header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 40px 30px 30px;
            text-align: center;
            border-bottom: 3px solid #FF6B00;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 3s infinite;
        }

        .logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            flex-direction: column;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .logo {
            height: 50px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.15));
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation: scaleIn 0.6s ease-out backwards;
        }

        .logo:nth-child(1) {
            animation-delay: 0.3s;
        }

        .logo:nth-child(2) {
            animation-delay: 0.4s;
        }

        .logo:hover {
            transform: scale(1.15) rotate(3deg) translateY(-5px);
            filter: drop-shadow(0 12px 24px rgba(0,0,0,0.3)) brightness(1.05);
        }

        .content {
            padding: 40px 30px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .event-badge {
            display: inline-block;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            color: #1a1a1a;
            padding: 10px 24px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4);
            animation: pulse 2.5s ease-in-out infinite, slideInRight 0.6s ease-out 0.5s backwards;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: default;
        }

        .event-badge:hover {
            transform: scale(1.08) rotate(-2deg);
            box-shadow: 0 8px 25px rgba(255, 193, 7, 0.6);
            animation: pulse 2.5s ease-in-out infinite;
        }

        .event-title {
            font-size: 28px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 10px;
            line-height: 1.3;
            background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.6s both;
            transition: all 0.3s ease;
            cursor: default;
        }

        .event-title:hover {
            transform: scale(1.03);
            letter-spacing: 0.5px;
        }

        .event-subtitle {
            font-size: 18px;
            font-weight: 600;
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C42 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.7s both;
            transition: all 0.3s ease;
            cursor: default;
        }

        .event-subtitle:hover {
            transform: scale(1.05);
            letter-spacing: 0.5px;
        }

        .cta-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin: 30px 0;
        }

        .cta-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 18px 28px;
            background: linear-gradient(135deg, #A65055 0%, #8B4449 100%);
            color: white;
            text-decoration: none;
            border-radius: 16px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 6px 20px rgba(166, 80, 85, 0.35);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) calc(0.8s + var(--delay)) both;
            border: 2px solid transparent;
        }

        .cta-button:nth-child(1) { --delay: 0s; }
        .cta-button:nth-child(2) { --delay: 0.15s; }
        .cta-button:nth-child(3) { --delay: 0.3s; }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .cta-button::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 14px;
            padding: 2px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover::after {
            opacity: 1;
        }

        .cta-button:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 12px 35px rgba(166, 80, 85, 0.6);
            background: linear-gradient(135deg, #8B4449 0%, #A65055 100%);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .cta-button:active {
            transform: translateY(-3px) scale(0.99);
            box-shadow: 0 8px 25px rgba(166, 80, 85, 0.5);
        }

        .cta-button svg {
            width: 22px;
            height: 22px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cta-button:hover svg {
            transform: scale(1.25) rotate(8deg) translateX(3px);
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .qr-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 35px 20px;
            border-radius: 20px;
            text-align: center;
            margin-top: 30px;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 1.1s both;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        .qr-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 0%, transparent 70%);
            animation: float 8s ease-in-out infinite;
        }

        .qr-section:hover {
            transform: scale(1.03) translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.8);
        }

        .qr-label {
            font-size: 14px;
            font-weight: 600;
            color: #495057;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
            width: 100%;
            animation: slideInLeft 0.6s ease-out 1.2s backwards;
            transition: all 0.3s ease;
        }

        .qr-label:hover {
            letter-spacing: 2px;
            color: #FF6B00;
        }

        .qr-code {
            background: white;
            padding: 20px;
            border-radius: 16px;
            display: inline-block;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            margin-bottom: 15px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            z-index: 1;
            max-width: 100%;
            animation: scaleIn 0.6s ease-out 1.3s backwards;
            border: 3px solid transparent;
        }

        .qr-code:hover {
            transform: scale(1.08) rotate(3deg);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
            border-color: rgba(255, 107, 0, 0.3);
        }

        .qr-code img {
            width: 200px;
            height: 200px;
            max-width: 100%;
            height: auto;
            aspect-ratio: 1;
            display: block;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .qr-code:hover img {
            filter: brightness(1.05);
        }

        .qr-url {
            font-size: 14px;
            font-weight: 600;
            color: #FF6B00;
            word-break: break-all;
            margin-top: 10px;
            position: relative;
            z-index: 1;
            text-decoration: none;
            display: inline-block;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 100%;
            animation: slideInRight 0.6s ease-out 1.4s backwards;
            padding: 5px 10px;
            border-radius: 8px;
        }

        .qr-url:hover {
            color: #FF8C42;
            transform: scale(1.08) translateY(-2px);
            background: rgba(255, 107, 0, 0.1);
            letter-spacing: 0.5px;
        }

        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 30px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
            animation: shimmer 4s infinite;
        }

        .hashtag {
            font-size: 20px;
            font-weight: 700;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 1.2s both, bounce 2s ease-in-out 2s infinite;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
            /* allow long hashtag (no spaces) to wrap on small screens */
            white-space: normal;
            max-width: 100%;
            overflow-wrap: anywhere;
            word-break: break-word;
            cursor: default;
            padding: 5px 15px;
            border-radius: 10px;
        }

        .hashtag:hover {
            transform: scale(1.15) rotate(-2deg);
            letter-spacing: 3px;
            background: linear-gradient(135deg, #FFD54F 0%, #FFC107 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: bounce 2s ease-in-out 2s infinite;
        }

        /* Desktop/Large screens - horizontal layout */
        @media (min-width: 768px) {
            .logos {
                flex-direction: row;
                gap: 30px;
            }

            .logo {
                height: 60px;
            }
        }

        /* Tablet and below - vertical layout */
        @media (max-width: 767px) {
            body {
                padding: 15px;
            }

            .container {
                border-radius: 16px;
                max-width: 100%;
            }

            .header {
                padding: 30px 20px 20px;
            }

            .logos {
                flex-direction: column;
                gap: 15px;
            }

            .logo {
                height: 45px;
            }

            .content {
                padding: 30px 20px;
            }

            .event-title {
                font-size: 24px;
            }

            .event-subtitle {
                font-size: 16px;
            }

            .cta-button {
                padding: 14px 20px;
                font-size: 15px;
            }

            .hashtag {
                font-size: 16px;
                padding: 4px 12px;
            }

            .qr-section {
                padding: 25px 15px;
                margin-top: 25px;
            }

            .qr-code {
                padding: 15px;
                max-width: calc(100% - 30px);
            }

            .qr-code img {
                width: 100%;
                max-width: 180px;
                height: auto;
            }

            .qr-url {
                font-size: 13px;
            }
        }

        /* Extra small screens */
        @media (max-width: 400px) {
            body {
                padding: 10px;
            }

            .event-title {
                font-size: 20px;
            }

            .logo {
                height: 40px;
            }

            .hashtag {
                font-size: 14px;
                padding: 3px 10px;
                letter-spacing: 0px;
            }

            .qr-section {
                padding: 20px 10px;
            }

            .qr-code {
                padding: 12px;
                max-width: calc(100% - 20px);
            }

            .qr-code img {
                max-width: 150px;
            }

            .qr-url {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="logos">
                <img src="{{ asset('Logo BPS 1.png') }}" alt="Logo BPS Kota Batam" class="logo">
                <img src="{{ asset('Logo SE2026.png') }}" alt="Logo Sensus Ekonomi 2026" class="logo">
            </div>
        </div>

        <!-- Content Section -->
        <div class="content">
            <div style="text-align: center;">
                <span class="event-badge">📅 Rabu, 10 Desember 2025</span>
                <h1 class="event-title">Focus Group Discussion</h1>
                <p class="event-subtitle">Sensus Ekonomi 2026</p>
            </div>

            <!-- CTA Buttons -->
            <div class="cta-buttons">
                <a href="https://1drv.ms/f/c/e6af1d259716302b/EoILY7DJxLlNqojzeGkxH2UB7mlO-FulwPumj0zkfU0MvA?e=3qEpFn" class="cta-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Materi
                </a>

                <a href="https://1drv.ms/f/c/e6af1d259716302b/ElpVafuXjFlCgRTMvZbkBAEBqRBjZETq4QfsAePIjs9ZDQ?e=BSZTmq" class="cta-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Rundown
                </a>

                <a href="https://1drv.ms/f/c/e6af1d259716302b/Ep9rMK_md3ROj3MQVFET-0wBfoB9kXo4rRIrncrC3TxUvQ?e=Yt80hb" class="cta-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Dokumentasi
                </a>
            </div>

            <!-- QR Code Section -->
            <div class="qr-section">
                <div class="qr-label">Scan untuk Akses Cepat</div>
                <div class="qr-code">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://sensus.bps.go.id/se2026/" alt="QR Code SE2026">
                </div>
                <a href="https://sensus.bps.go.id/se2026/" target="_blank" class="qr-url">Landing Page SE2026</a>
                <div style="font-size: 12px; color: #6c757d; margin-top: 8px;">https://sensus.bps.go.id/se2026/</div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <div class="hashtag">#MencatatEkonomiIndonesia</div>
        </div>
    </div>
</body>
</html>
