<?php
/**
 * مساحة الـسّـت | El Sitt Boutique Workspace
 * Main Website Page (PHP & JavaScript Engine)
 */
$coupletLine1 = "يا ليل يا ليل.. يا ليل يا ليلي";
$coupletLine2 = "يا حبيبي.. حُبكَ غَامِرُ قَلْبِي بِنورِه";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>الست | مساحة العمل المشتركة والواحة الإنتاجية</title>
  <meta name="description" content="مساحة عمل استثنائية تجمع بين الهدوء، الفخامة، وسرعة الإنترنت الفائقة لمبدعي ورواد الأعمال.">
  <meta name="theme-color" content="#3D5149">
  <meta name="color-scheme" content="light">
  
  <!-- Open Graph / Meta Optimization -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="الست | مساحة العمل المشتركة والواحة الإنتاجية">
  <meta property="og:description" content="مساحة عمل استثنائية تجمع بين الهدوء، الفخامة، وسرعة الإنترنت الفائقة لمبدعي ورواد الأعمال.">
  <meta property="og:locale" content="ar_EG">

  <!-- Performance Hints & Preconnects -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">
  <link rel="dns-prefetch" href="https://images.unsplash.com">

  <!-- Google Fonts: Tajawal, Playfair, Aref Ruqaa & Amiri -->
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Amiri:ital,wght@0,700;1,400&family=Tajawal:wght@300;400;500;700;800&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            alabaster: '#FDFBF7',
            cream: '#F7F3EC',
            sage: {
              50: '#F2F6F4',
              100: '#E1EBE7',
              500: '#7D938A',
              600: '#5A7369',
              800: '#3D5149',
              900: '#2A3832',
            },
            amberAccent: {
              light: '#EAD7C5',
              DEFAULT: '#C88D66',
              dark: '#9E643D',
            },
            slateText: {
              light: '#6E7A81',
              DEFAULT: '#36454F',
              dark: '#1E282D',
            }
          },
          fontFamily: {
            sans: ['Tajawal', 'sans-serif'],
            serif: ['Playfair Display', 'serif'],
            calligraphy: ['Aref Ruqaa', 'Amiri', 'serif']
          }
        }
      }
    }
  </script>

  <!-- Schema.org JSON-LD Microdata (Peak SEO Standards) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CoworkingSpace",
    "name": "الست | مساحة العمل المشتركة",
    "alternateName": "El Sitt Workspace",
    "description": "مساحة عمل استثنائية تجمع بين الهدوء، الفخامة، وسرعة الإنترنت الفائقة لمبدعي ورواد الأعمال.",
    "url": "https://elsitt-space.com",
    "telephone": "+201010379368",
    "email": "hello@elsitt-space.com",
    "priceRange": "45 EGP - 250 EGP",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "حي المعادي الهادئ، دجلة",
      "addressLocality": "القاهرة",
      "addressCountry": "EG"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"],
        "opens": "08:00",
        "closes": "24:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Friday",
        "opens": "13:00",
        "closes": "24:00"
      }
    ]
  }
  </script>

  <!-- Advanced CSS Engine & Design Tokens -->
  <style>
    :root {
      --color-alabaster: #FDFBF7;
      --color-cream: #F7F3EC;
      --color-sage-500: #7D938A;
      --color-sage-600: #5A7369;
      --color-sage-800: #3D5149;
      --color-amber-accent: #C88D66;
    }

    /* Hardware Accelerated Smooth Rendering */
    * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* Accessible Focus Ring */
    :focus-visible {
      outline: 2px solid var(--color-amber-accent);
      outline-offset: 3px;
    }

    /* Custom Modern Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #F7F3EC;
    }
    ::-webkit-scrollbar-thumb {
      background: #7D938A;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #5A7369;
    }

    /* Glassmorphism & GPU Micro-effects */
    .glass-card {
      background: rgba(253, 251, 247, 0.85);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(225, 235, 231, 0.6);
      transform: translateZ(0);
    }
    .glass-nav {
      background: rgba(253, 251, 247, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(125, 147, 138, 0.15);
      transform: translateZ(0);
    }

    /* Calligraphy Ornamental Box & Aura */
    .ornament-border {
      background: radial-gradient(circle at center, rgba(200, 141, 102, 0.12) 0%, rgba(247, 243, 236, 0.4) 70%, transparent 100%);
      box-shadow: 0 15px 35px -10px rgba(90, 115, 105, 0.15);
      contain: layout style;
    }
    
    .calligraphy-text {
      background: linear-gradient(135deg, #1E282D 0%, #3D5149 40%, #C88D66 85%, #9E643D 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 4px 18px rgba(200, 141, 102, 0.25);
    }

    /* Pulse animation for live indicators */
    @keyframes softPulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.6; transform: scale(1.15); }
    }
    .live-pulse {
      animation: softPulse 2.4s infinite ease-in-out;
      will-change: transform, opacity;
    }

    /* Range input styling */
    input[type=range] {
      -webkit-appearance: none;
      appearance: none;
      background: #E1EBE7;
      border-radius: 8px;
      height: 6px;
    }
    input[type=range]::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      height: 22px;
      width: 22px;
      border-radius: 50%;
      background: #C88D66;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(200, 141, 102, 0.4);
      transition: transform 0.15s ease;
    }
    input[type=range]::-webkit-slider-thumb:hover {
      transform: scale(1.2);
    }
    input[type=range]::-moz-range-thumb {
      height: 22px;
      width: 22px;
      border: none;
      border-radius: 50%;
      background: #C88D66;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(200, 141, 102, 0.4);
      transition: transform 0.15s ease;
    }

    /* Lock body scroll when modal is active */
    body.modal-open {
      overflow: hidden;
    }

    /* Header Couplet Glow Animation */
    @keyframes coupletSoftGlow {
      0%, 100% {
        text-shadow: 0 0 10px rgba(200, 141, 102, 0.25);
      }
      50% {
        text-shadow: 0 0 18px rgba(200, 141, 102, 0.7), 0 0 28px rgba(234, 215, 197, 0.5);
      }
    }
    .couplet-glow {
      animation: coupletSoftGlow 3.5s ease-in-out infinite;
    }
  </style>
</head>
  <body class="bg-alabaster text-slateText font-sans antialiased overflow-x-hidden">

  <!-- Top Live Presence Bar -->
  <aside id="liveTickerBar" aria-label="شريط أوقات العمل" class="bg-sage-900 text-alabaster text-xs py-2 px-4 transition-all duration-300">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
      <div class="flex items-center gap-4 text-xs text-amberAccent-light">
        <span>⏰ المواعيد: ٨:٠٠ ص – ١٢:٠٠ منتصف الليل</span>
      </div>
    </div>
  </aside>

  <!-- Dynamic Navigation Bar -->
  <header id="mainHeader" class="sticky top-0 z-50 transition-all duration-300 border-b border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20 transition-all duration-300 gap-4" id="navContainer">
        
        <!-- Logo (بروفايل الست) -->
        <a href="#" aria-label="الرئيسية - مساحة عمل الست" class="flex items-center gap-3 group flex-shrink-0">
          <div class="w-11 h-11 rounded-2xl bg-sage-800 text-amberAccent flex items-center justify-center font-bold text-2xl shadow-sm transition-transform duration-300 group-hover:rotate-6">
            س
          </div>
          <div class="flex flex-col">
            <span class="text-2xl font-bold tracking-tight text-sage-900 leading-tight">الـسّـت</span>
            <span class="text-[10px] tracking-widest text-amberAccent uppercase font-medium">Boutique Workspace</span>
          </div>
        </a>

        <!-- Center: الكوبليه الكلثومي بين بروفايل الست واحجز مقعدك -->
        <div id="headerCoupletContainer" class="hidden md:flex flex-col items-center justify-center text-center px-4 mx-auto select-none">
          <div class="flex items-center gap-1.5 text-amberAccent-dark">
            <span class="text-[10px] text-amberAccent">✤</span>
            <span id="coupletLine1" class="font-calligraphy text-xs lg:text-sm font-bold text-amberAccent-dark couplet-glow">
              "<?= htmlspecialchars($coupletLine1) ?>"
            </span>
            <span class="text-[10px] text-amberAccent">✤</span>
          </div>
          <span id="coupletLine2" class="font-calligraphy text-[11px] lg:text-xs text-sage-800 font-semibold opacity-90 mt-0.5">
            "<?= htmlspecialchars($coupletLine2) ?>"
          </span>
        </div>

        <!-- Left: CTA Booking & Language Toggle (بدون حاسبة الباقات والنبض في الهيدر) -->
        <div class="flex items-center gap-3 flex-shrink-0">
          <a href="#booking" class="relative inline-flex items-center justify-center px-6 py-2.5 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-sm font-semibold shadow-md shadow-sage-900/10 hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
            احجز مقعدك الآن
          </a>
          <button id="langToggle" type="button" data-lang="ar" aria-label="تبديل اللغة / Switch Language" class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl border border-sage-200 bg-white hover:bg-sage-50 text-sage-800 text-sm font-semibold transition-all">English</button>

          <!-- Mobile Hamburger -->
          <button id="mobileMenuBtn" aria-expanded="false" aria-controls="mobileMenu" class="lg:hidden p-2.5 rounded-xl text-sage-800 hover:bg-cream transition-colors" aria-label="فتح القائمة">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden lg:hidden bg-alabaster/98 border-b border-sage-100 px-6 py-6 transition-all duration-300 shadow-xl" role="region" aria-label="القائمة المتنقلة">
      <div class="flex flex-col gap-4 text-base font-medium">
        <a href="#live-vibe" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">النبض المباشر والسعة</a>
        <a href="#drinks-bar" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">مشروبات وقهوة الست</a>
        <a href="#calculator" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">حاسبة الباقات والأسعار</a>
        <a href="#amenities" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">مميزات وتجهيزات المكان</a>
        <a href="#gallery" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">معرض الأجواء الحقيقية</a>
        <a href="#faq" class="mobile-nav-link text-slateText hover:text-sage-600 py-1">دليل الأسئلة الشائعة</a>
        <a href="#booking" class="mobile-nav-link text-center w-full mt-2 py-3 rounded-xl bg-sage-800 text-alabaster font-semibold">حجز مباشر</a>
      </div>
    </div>
  </header>

  <main>
    <!-- HERO SECTION -->
    <section class="relative pt-10 pb-20 md:pt-16 md:pb-28 overflow-hidden bg-gradient-to-b from-alabaster via-cream/40 to-alabaster">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        
        <!-- Central Calligraphy Masterpiece Box (Controlled via Advanced JavaScript RAF Engine) -->
        <div id="calligraphyWrapper" class="relative max-w-2xl mx-auto mb-10 transition-transform duration-200 ease-out will-change-transform">
          <div class="ornament-border p-6 sm:p-9 rounded-3xl border border-amberAccent/30 relative">
            <!-- Top Ornament -->
            <div class="flex items-center justify-center gap-3 text-amberAccent mb-2">
              <span class="w-12 h-px bg-gradient-to-l from-amberAccent to-transparent"></span>
              <span class="text-xs tracking-widest font-serif">✤ مَسَاحَةُ العَمَلِ المُشتَرَكَة ✤</span>
              <span class="w-12 h-px bg-gradient-to-r from-amberAccent to-transparent"></span>
            </div>

            <!-- Main Calligraphy Name -->
            <h1 id="calligraphyTitle" class="calligraphy-text font-calligraphy text-6xl sm:text-7xl md:text-8xl font-bold py-2 select-none tracking-normal cursor-default transition-all duration-300">
              الـسّـت
            </h1>
            <p class="text-xs uppercase tracking-[0.3em] text-amberAccent-dark font-semibold mt-1">El Sitt Workspace</p>

            <!-- Bottom Ornament -->
            <div class="flex items-center justify-center gap-2 mt-4 text-amberAccent/70">
              <span class="text-base">✦</span>
              <span class="text-xs text-slateText-light font-medium">سلطنة وهدوء وإنجاز بلا انقطاع</span>
              <span class="text-base">✦</span>
            </div>
          </div>
        </div>

        <!-- Hero Subtitle & Description -->
        <div class="max-w-3xl mx-auto space-y-5">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-sage-900 leading-snug">
            مساحة عمل تمنحك صفاء الذهن وأعلى مستويات الإنتاجية
          </h2>
          <p class="text-base sm:text-lg text-slateText-light max-w-2xl mx-auto leading-relaxed">
            صُممت "الست" لتكون واحتك الهادئة للعمل والابتكار، حيث تجتمع وسائل الراحة الطبية مع خدمة إنترنت فائقة القوة وقهوة مختصة ومشروبات أصيلة محضرة بعناية.
          </p>

          <!-- Quick Experience Highlights (No Numbers, Pure Value) -->
          <div class="pt-2 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto">
            <div class="p-4 rounded-2xl bg-white border border-sage-100 shadow-sm flex items-center gap-3 text-right">
              <div class="w-10 h-10 rounded-xl bg-sage-100 text-sage-800 flex items-center justify-center font-bold text-lg">
                📶
              </div>
              <div>
                <div class="text-sm font-bold text-sage-900">إنترنت فائق القوة</div>
                <div class="text-xs text-slateText-light">اتصال ثابت مستقر دائماً</div>
              </div>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-sage-100 shadow-sm flex items-center gap-3 text-right">
              <div class="w-10 h-10 rounded-xl bg-sage-100 text-sage-800 flex items-center justify-center font-bold text-lg">
                🕊️
              </div>
              <div>
                <div class="text-sm font-bold text-sage-900">أجواء هدوء وتركيز</div>
                <div class="text-xs text-slateText-light">بيئة عمل صامتة ومريحة</div>
              </div>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-sage-100 shadow-sm flex items-center gap-3 text-right">
              <div class="w-10 h-10 rounded-xl bg-amberAccent/15 text-amberAccent-dark flex items-center justify-center font-bold text-lg">
                ☕
              </div>
              <div>
                <div class="text-sm font-bold text-sage-900">مشروبات وقهوة الست</div>
                <div class="text-xs text-slateText-light">تخصصات ساخنة ومثلجة</div>
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
            <a href="#booking" class="px-8 py-3.5 rounded-2xl bg-sage-800 hover:bg-sage-900 text-alabaster font-semibold transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5">
              احجز مكانك اليوم
            </a>
            <a href="#centerQuickHub" class="px-6 py-3.5 rounded-2xl bg-white hover:bg-sage-50 text-sage-800 font-semibold border border-sage-200 transition-all flex items-center gap-2">
              <span class="text-amberAccent">✨</span>
              <span>استكشف خدمات ومشروبات الست</span>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CENTER QUICK INTERACTIVE HUB (مركز الوصول السريع التفاعلي في منتصف الصفحة) -->
    <!-- ========================================================================= -->
    <section id="centerQuickHub" aria-label="مركز الخدمات والوصول السريع" class="py-12 bg-gradient-to-b from-alabaster via-cream/40 to-white border-y border-sage-100 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amberAccent/15 text-amberAccent-dark text-xs font-bold mb-3 shadow-sm">
          <span>✨</span>
          <span>خدمات الـسّـت بنقرة واحدة • تحكم مباشر</span>
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-sage-900 mb-2">أيقونات الوصول السريع والطلبات</h2>
        <p class="text-slateText-light text-xs sm:text-sm max-w-2xl mx-auto mb-8">اضغط على أي أيقونة لعرض القائمة المخصصة فوراً مع زر رجوع مباشر (BACK) للعودة للصفحة:</p>

        <!-- The 4 Center Interactive Action Cards / Icons -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto">
          
          <!-- 1. Cold Drinks Icon Button -->
          <button id="hubColdDrinksBtn" type="button" aria-haspopup="dialog" class="group p-5 sm:p-6 rounded-3xl bg-white hover:bg-blue-50/60 border-2 border-blue-100/90 hover:border-blue-400 shadow-sm hover:shadow-xl transition-all duration-300 text-center flex flex-col items-center justify-between hover:-translate-y-1">
            <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-3xl shadow-inner group-hover:scale-110 transition-transform">
              ❄️
            </div>
            <div class="my-3">
              <span class="block text-sm sm:text-base font-extrabold text-sage-900 group-hover:text-blue-700 transition-colors">المشروبات المثلجة</span>
              <span class="block text-[11px] sm:text-xs text-slateText-light mt-1">عصائر، آيس سبانش، ماتشا ومنعشات</span>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">
              المشروبات الساقعة <span>←</span>
            </span>
          </button>

          <!-- 2. Hot Drinks Icon Button -->
          <button id="hubHotDrinksBtn" type="button" aria-haspopup="dialog" class="group p-5 sm:p-6 rounded-3xl bg-white hover:bg-amber-50/60 border-2 border-amber-100/90 hover:border-amber-400 shadow-sm hover:shadow-xl transition-all duration-300 text-center flex flex-col items-center justify-between hover:-translate-y-1">
            <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-amber-50 text-amber-700 flex items-center justify-center text-3xl shadow-inner group-hover:scale-110 transition-transform">
              ☕
            </div>
            <div class="my-3">
              <span class="block text-sm sm:text-base font-extrabold text-sage-900 group-hover:text-amber-800 transition-colors">المشروبات الساخنة</span>
              <span class="block text-[11px] sm:text-xs text-slateText-light mt-1">قهوة على الرمل، شاي مخدوم، كرك</span>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-amber-700 group-hover:translate-x-1 transition-transform">
              تخصيص السكر والطلب <span>←</span>
            </span>
          </button>

          <!-- 3. Pricing Calculator Icon Button (حاسبة الباقات والأسعار) -->
          <button id="hubCalcBtn" type="button" aria-haspopup="dialog" class="group p-5 sm:p-6 rounded-3xl bg-white hover:bg-amberAccent/15 border-2 border-amberAccent/40 hover:border-amberAccent shadow-sm hover:shadow-xl transition-all duration-300 text-center flex flex-col items-center justify-between hover:-translate-y-1">
            <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-amberAccent/20 text-amberAccent-dark flex items-center justify-center text-3xl shadow-inner group-hover:scale-110 transition-transform">
              🧮
            </div>
            <div class="my-3">
              <span class="block text-sm sm:text-base font-extrabold text-sage-900 group-hover:text-amberAccent-dark transition-colors">حاسبة الباقات والأسعار</span>
              <span class="block text-[11px] sm:text-xs text-slateText-light mt-1">حساب تكلفة الساعات والخصومات فوراً</span>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-amberAccent-dark group-hover:translate-x-1 transition-transform">
              احسب تكلفتك الآن <span>←</span>
            </span>
          </button>

          <!-- 4. Live Vibe Icon Button (مؤشر النبض والهدوء الحي) -->
          <button id="hubLiveVibeBtn" type="button" aria-haspopup="dialog" class="group p-5 sm:p-6 rounded-3xl bg-white hover:bg-emerald-50/60 border-2 border-emerald-100/90 hover:border-emerald-400 shadow-sm hover:shadow-xl transition-all duration-300 text-center flex flex-col items-center justify-between hover:-translate-y-1">
            <div class="relative w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-3xl shadow-inner group-hover:scale-110 transition-transform">
              📊
              <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white live-pulse"></span>
            </div>
            <div class="my-3">
              <span class="block text-sm sm:text-base font-extrabold text-sage-900 group-hover:text-emerald-700 transition-colors">النبض والهدوء الحي</span>
              <span class="block text-[11px] sm:text-xs text-slateText-light mt-1">تتبع السعة الشاغرة ومستوى الهدوء</span>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-emerald-700 group-hover:translate-x-1 transition-transform">
              معاينة الأماكن الشاغرة <span>←</span>
            </span>
          </button>

        </div>
      </div>
    </section>

    <!-- LIVE VIBE SECTION -->
    <section id="live-vibe" class="py-20 bg-white border-y border-sage-100 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-14">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amberAccent/15 text-amberAccent-dark text-xs font-bold mb-3">
            تحديث مباشر ومستمر
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900">مؤشر النبض والهدوء الحي (Live Vibe)</h2>
          <p class="text-slateText-light mt-3">تعرف على حالة السعة وتوفر المقاعد والأجواء بكل ركن في "الست" قبل قدومك دون الحاجة للسؤال.</p>
        </div>

        <!-- Live Zones Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="zonesContainer">
          
          <!-- Zone 1: Silent Focus -->
          <div class="p-6 rounded-3xl bg-alabaster border border-sage-100 shadow-sm hover:shadow-md transition-all">
            <div class="flex items-center justify-between mb-4">
              <span class="text-sm font-bold text-sage-900">ملاذ التركيز الصامت</span>
              <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 font-semibold">متاح شاغر</span>
            </div>
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs mb-1">
                  <span class="text-slateText-light">نسبة الإشغال</span>
                  <span class="font-bold text-sage-900" id="occ-silent">45%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                  <div class="h-full bg-emerald-500 rounded-full transition-all duration-500" style="width: 45%"></div>
                </div>
              </div>
              <div class="pt-2 flex items-center justify-between border-t border-sage-100/70 text-xs">
                <span class="text-slateText-light">حالة الأجواء:</span>
                <span class="font-bold text-sage-800">هدوء وتركيز تام</span>
              </div>
              <div class="text-[11px] text-slateText-light">
                الشاغر الحالي: <strong>7 مكاتب متاحة فوراً</strong>
              </div>
            </div>
          </div>

          <!-- Zone 2: Collaboration & Cafe Lounge -->
          <div class="p-6 rounded-3xl bg-alabaster border border-sage-100 shadow-sm hover:shadow-md transition-all">
            <div class="flex items-center justify-between mb-4">
              <span class="text-sm font-bold text-sage-900">لاونج العمل والكافيه</span>
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 font-semibold">حركة معتدلة</span>
            </div>
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs mb-1">
                  <span class="text-slateText-light">نسبة الإشغال</span>
                  <span class="font-bold text-sage-900" id="occ-cafe">68%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                  <div class="h-full bg-amberAccent rounded-full transition-all duration-500" style="width: 68%"></div>
                </div>
              </div>
              <div class="pt-2 flex items-center justify-between border-t border-sage-100/70 text-xs">
                <span class="text-slateText-light">سرعة واستقرار النت:</span>
                <span class="font-bold text-emerald-700">إنترنت فائق القوة ومستقر</span>
              </div>
              <div class="text-[11px] text-slateText-light">
                الشاغر الحالي: <strong>6 طاولات شاغرة</strong>
              </div>
            </div>
          </div>

          <!-- Zone 3: Meeting Pods -->
          <div class="p-6 rounded-3xl bg-alabaster border border-sage-100 shadow-sm hover:shadow-md transition-all">
            <div class="flex items-center justify-between mb-4">
              <span class="text-sm font-bold text-sage-900">كبائن المكالمات (Phone Pods)</span>
              <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 font-semibold">2 شاغرة</span>
            </div>
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs mb-1">
                  <span class="text-slateText-light">نسبة الإشغال</span>
                  <span class="font-bold text-sage-900" id="occ-pods">50%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="h-full bg-emerald-500 rounded-full transition-all duration-500" style="width: 50%"></div>
                </div>
              </div>
              <div class="pt-2 flex items-center justify-between border-t border-sage-100/70 text-xs">
                <span class="text-slateText-light">العزل الصوتي:</span>
                <span class="font-bold text-sage-800">خصوصية تامة لاجتماعاتك</span>
              </div>
              <div class="text-[11px] text-slateText-light">
                الشاغر الحالي: <strong>كبينتان متوفرتان الآن</strong>
              </div>
            </div>
          </div>

          <!-- Zone 4: Executive Meeting Room -->
          <div class="p-6 rounded-3xl bg-alabaster border border-sage-100 shadow-sm hover:shadow-md transition-all">
            <div class="flex items-center justify-between mb-4">
              <span class="text-sm font-bold text-sage-900">قاعة اجتماعات "أم كلثوم"</span>
              <span class="text-xs px-2.5 py-1 rounded-full bg-sage-100 text-sage-800 font-semibold">متاحة للحجز</span>
            </div>
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs mb-1">
                  <span class="text-slateText-light">جاهزية القاعة</span>
                  <span class="font-bold text-sage-900">جاهزة بالكامل</span>
                </div>
                <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                  <div class="h-full bg-sage-600 rounded-full transition-all duration-500" style="width: 100%"></div>
                </div>
              </div>
              <div class="pt-2 flex items-center justify-between border-t border-sage-100/70 text-xs">
                <span class="text-slateText-light">خدمة العرض:</span>
                <span class="font-bold text-sage-800">شاشة تفاعلية واجتماعات ذكية</span>
              </div>
              <div class="text-[11px] text-slateText-light">
                السعة: <strong>تتسع حتى 10 أفراد بأريحية</strong>
              </div>
            </div>
          </div>

        </div>

        <!-- Quick refresh action -->
        <div class="mt-8 text-center">
          <button id="refreshVibeBtn" type="button" class="inline-flex items-center gap-2 text-xs font-semibold text-sage-600 hover:text-sage-800 transition-colors">
            <svg class="w-4 h-4" id="refreshIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg>
            تحديث حالة الإشغال المباشر
          </button>
        </div>

      </div>
    </section>

    <!-- DRINKS BAR SECTION (Cold ❄️ & Hot ☕ with Sugar Level Customizer) -->
    <section id="drinks-bar" class="py-20 bg-cream/40">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
          <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">باريستا الست والمشروبات الأصلية</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">قائمة المشروبات والقهوة المختصة</h2>
          <p class="text-slateText-light mt-2">اضغط على أي مشروب ساخن أو قهوة لتخصيص كمية السكر واختيار المكونات حسب مزاجك.</p>

          <!-- Category Buttons: ONLY 2 Buttons (Cold & Hot), NO All button -->
          <div class="flex items-center justify-center gap-3 mt-6" role="tablist" aria-label="أنواع المشروبات">
            <button id="btnColdDrinks" type="button" role="tab" aria-selected="false" class="px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white text-slateText border border-sage-200 hover:bg-sage-50 transition-all flex items-center gap-2">
              <span>❄️</span> المشروبات المثلجة والمنعشة
            </button>
            <button id="btnHotDrinks" type="button" role="tab" aria-selected="true" class="px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-sage-800 text-alabaster shadow-md transition-all flex items-center gap-2">
              <span>☕</span> المشروبات الساخنة والقهوة
            </button>
          </div>
        </div>

        <!-- Drinks Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="drinksGrid">
          
          <!-- Hot Drink 1 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="قهوة تركي على الرملة" data-type="hot" data-desc="قهوة أصيلة محوجة أو سادة محضرة ببطء على الرمال الساخنة برغوة مخملية وهيل ومستكة لـ 'سلطنة' العمل والتركيز." data-ingredients="بن أرابيكا ممتاز، هيل مطحون طازج، ماء نقي، مستكة اختيارية.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">قهوة تركي على الرملة</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">محضرة ببطء على الرمال الساخنة برغوة غنية تضبط مزاجك طوال اليوم.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Hot Drink 2 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="شاي بلدي مخدوم (عشمة الست)" data-type="hot" data-desc="شاي أحمر ثقيل أو خفيف من أجود أنواع الشاي الكيني مع أوراق النعناع البلدي الفريش." data-ingredients="شاي أحمر صافي، نعناع بلدي فريش، ماء مغلي.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">شاي بلدي مخدوم بالنعناع</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">شاي أصيل منعش يعيد لك الحيوية والنشاط أثناء إنجاز مهامك.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Hot Drink 3 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="فلات وايت (Specialty Flat White)" data-type="hot" data-desc="شوت مزدوج من الإسبريسو الفاخر مع طبقة رقيقة وحريرية من حليب المايكروفوم الدافئ." data-ingredients="دبل شوت إسبريسو أرابيكا، حليب طازج مبستر.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">فلات وايت (Flat White)</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">قهوة قوية بلمسة حليبية ناعمة لعشاق المذاق الصريح المركز.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Hot Drink 4 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="شاي حليب / كرك (Karak Tea)" data-type="hot" data-desc="شاي مغلوب مع الحليب المكثف والمحلى وتشكيلة هيل وزعفران خفيفة." data-ingredients="شاي أحمر، حليب مبخر، هيل، رشة زعفران.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">شاي حليب أو كرك دافئ</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">مشروب شتوي وصيفي دافئ وغني بالنكهات العطرية الهادئة.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Hot Drink 5 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="هوت شوكلت بلجيكي فاخر" data-type="hot" data-desc="شوكولاتة بلجيكية داكنة مذوبة في حليب دافئ غني مع رشة مارشميلو خفيفة." data-ingredients="شوكولاتة بلجيكية خام، حليب كامل الدسم،كاكو نقي.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">هوت شوكلت بلجيكي فاخر</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">مشروب الطاقة والمزاج الرايق للتركيز الطويل.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Hot Drink 6 -->
          <article class="drink-card hot-drink cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="أعشاب سانت كاترين والبابونج" data-type="hot" data-desc="مزيج طبيعي من أعشاب سيناء وحبَق سانت كاترين لتهدئة الأعصاب وإزالة إجهاد الشاشات." data-ingredients="بابونج طبيعي، حبق سيناوي، مرمرية.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن ☕</span>
              <span class="text-xs font-bold text-sage-700">اضغط لتخصيص السكر</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">أعشاب سيناء الهادئة</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">ضيافة طبيعية لتهدئة الذهن وتنقية الأعصاب أثناء العمل الصامت.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اختر: سادة / مظبوط / زيادة</span>
              <span>←</span>
            </div>
          </article>

          <!-- Cold Drink 1 (Hidden by default until cold button clicked) -->
          <article class="drink-card cold-drink hidden cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="آيس سبانش لاتيه (Iced Spanish Latte)" data-type="cold" data-desc="توازن رائع بين الحليب المكثف المحلى البارد ودبل شوت إسبريسو أرابيكا مع الثلج." data-ingredients="إسبريسو، حليب مكثف محلى، حليب بارد، ثلج.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 font-semibold">مشروب مثلج ❄️</span>
              <span class="text-xs font-bold text-sage-700">عرض المكونات</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">آيس سبانش لاتيه</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">المشروب الأكثر طلباً لإنعاش حواسك ومنحك طاقة فورية.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اضغط لعرض التفاصيل</span>
              <span>←</span>
            </div>
          </article>

          <!-- Cold Drink 2 -->
          <article class="drink-card cold-drink hidden cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="كركديه أسواني مثلج بالنعناع" data-type="cold" data-desc="أوراق كركديه أسوانية أصلية منقوعة على البارد ومحلية بعسل النحل الطبيعي مع لمسة نعناع." data-ingredients="كركديه طبيعي أسواني، عسل نحل، نعناع فريش، ثلج.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 font-semibold">مشروب مثلج ❄️</span>
              <span class="text-xs font-bold text-sage-700">عرض المكونات</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">كركديه أسواني بالنعناع</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">مشروب مصري طبيعي 100% يروي العطش ويعدل المزاج.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اضغط لعرض التفاصيل</span>
              <span>←</span>
            </div>
          </article>

          <!-- Cold Drink 3 -->
          <article class="drink-card cold-drink hidden cursor-pointer p-6 rounded-3xl bg-white border border-sage-100 shadow-sm hover:shadow-md transition-all group" data-name="آيس ماتشا لاتيه (Iced Matcha)" data-type="cold" data-desc="مسحوق شاي الماتشا الأخضر الياباني الفاخر مع الحليب البارد والثلج." data-ingredients="ماتشا يابانية أصلية، حليب بارد، محلي طبيعي.">
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 font-semibold">مشروب مثلج ❄️</span>
              <span class="text-xs font-bold text-sage-700">عرض المكونات</span>
            </div>
            <h3 class="text-lg font-bold text-sage-900 group-hover:text-amberAccent-dark transition-colors">آيس ماتشا لاتيه</h3>
            <p class="text-xs text-slateText-light mt-1.5 line-clamp-2">طاقة ذهنية هادئة ومستدامة بدون توتر الكافيين العالي.</p>
            <div class="mt-4 pt-3 border-t border-sage-100 flex items-center justify-between text-xs text-sage-800 font-semibold">
              <span>اضغط لعرض التفاصيل</span>
              <span>←</span>
            </div>
          </article>

        </div>

      </div>
    </section>

    <!-- SECTION 3: Custom Calculator -->
    <section id="calculator" class="py-20 bg-cream/50 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
          <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">بدون عقود معقدة أو رسوم مخفية</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">حاسبة الباقات المرنة والمخصصة</h2>
          <p class="text-slateText-light mt-2">حدد احتياجك بدقة لتشاهد التكلفة الفورية، مع كافة المزايا المشمولة مجاناً.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-sage-100">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Controls Column -->
            <div class="lg:col-span-7 space-y-6">
              
              <!-- Type Selector -->
              <div>
                <label class="block text-sm font-bold text-sage-900 mb-2">نوع المساحة المطلوبة:</label>
                <div class="grid grid-cols-3 gap-2" role="group" aria-label="خيارات نوع المساحة">
                  <button type="button" class="space-type-btn py-2.5 px-3 rounded-xl border border-sage-600 bg-sage-800 text-alabaster text-xs sm:text-sm font-bold transition-all" data-rate="45" data-title="مكتب مشترك (Flex Desk)">
                    مكتب مرن
                  </button>
                  <button type="button" class="space-type-btn py-2.5 px-3 rounded-xl border border-sage-200 bg-white text-slateText hover:border-sage-400 text-xs sm:text-sm font-semibold transition-all" data-rate="75" data-title="مكتب مخصص هادئ (Dedicated)">
                    مكتب مخصص
                  </button>
                  <button type="button" class="space-type-btn py-2.5 px-3 rounded-xl border border-sage-200 bg-white text-slateText hover:border-sage-400 text-xs sm:text-sm font-semibold transition-all" data-rate="250" data-title="غرفة اجتماعات خاصة">
                    قاعة اجتماعات
                  </button>
                </div>
              </div>

              <!-- Duration Slider -->
              <div>
                <div class="flex justify-between items-center mb-2">
                  <label for="durationSlider" class="text-sm font-bold text-sage-900">المدة الزمنية:</label>
                  <span class="text-sm font-bold text-amberAccent-dark" id="durationDisplay">4 ساعات</span>
                </div>
                <input type="range" id="durationSlider" min="1" max="12" value="4" aria-valuemin="1" aria-valuemax="12" aria-valuenow="4" class="w-full cursor-pointer">
                <div class="flex justify-between text-[11px] text-slateText-light mt-1">
                  <span>ساعة واحدة</span>
                  <span>نصف يوم (5 س)</span>
                  <span>يوم كامل (12 س)</span>
                </div>
              </div>

              <!-- Optional Add-ons -->
              <div>
                <span class="block text-sm font-bold text-sage-900 mb-2">إضافات وتسهيلات اختيارية:</span>
                <div class="space-y-2">
                  <label class="flex items-center justify-between p-3 rounded-xl border border-sage-100 hover:bg-alabaster cursor-pointer transition-colors">
                    <div class="flex items-center gap-3">
                      <input type="checkbox" id="addonCoffee" class="w-4 h-4 text-sage-800 rounded accent-sage-800">
                      <span class="text-xs sm:text-sm font-medium">باقة القهوة والمشروبات الساخنة المفتوحة</span>
                    </div>
                    <span class="text-xs font-bold text-sage-700">+60 ج.م</span>
                  </label>

                  <label class="flex items-center justify-between p-3 rounded-xl border border-sage-100 hover:bg-alabaster cursor-pointer transition-colors">
                    <div class="flex items-center gap-3">
                      <input type="checkbox" id="addonLocker" class="w-4 h-4 text-sage-800 rounded accent-sage-800">
                      <span class="text-xs sm:text-sm font-medium">خزانة أمانات رقمية خاصة طوال اليوم</span>
                    </div>
                    <span class="text-xs font-bold text-sage-700">+30 ج.م</span>
                  </label>

                  <label class="flex items-center justify-between p-3 rounded-xl border border-sage-100 hover:bg-alabaster cursor-pointer transition-colors">
                    <div class="flex items-center gap-3">
                      <input type="checkbox" id="addonPrint" class="w-4 h-4 text-sage-800 rounded accent-sage-800">
                      <span class="text-xs sm:text-sm font-medium">باقة طباعة مستندات ليزر ملونة (حتى 30 صفحة)</span>
                    </div>
                    <span class="text-xs font-bold text-sage-700">+40 ج.م</span>
                  </label>
                </div>
              </div>

            </div>

            <!-- Summary Column -->
            <div class="lg:col-span-5 flex flex-col justify-between p-6 rounded-2xl bg-sage-50/80 border border-sage-100">
              <div>
                <span class="text-xs font-semibold text-sage-700">ملخص التقدير الفوري</span>
                <h3 class="text-lg font-bold text-sage-900 mt-1" id="calcSelectedTitle">مكتب مشترك (Flex Desk)</h3>
                
                <div class="my-4 border-t border-b border-sage-200/60 py-3 space-y-2 text-xs">
                  <div class="flex justify-between">
                    <span class="text-slateText">سعر الساعات الأساسية:</span>
                    <span class="font-bold text-sage-900" id="calcBasePrice">180 ج.م</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="text-slateText">الإضافات المحددة:</span>
                    <span class="font-bold text-sage-900" id="calcAddonsPrice">0 ج.م</span>
                  </div>
                  <div class="flex justify-between text-emerald-700">
                    <span>خصم البقاء الطويل (+4 ساعات):</span>
                    <span class="font-bold" id="calcDiscount">-18 ج.م</span>
                  </div>
                </div>

                <!-- Perks Included For Free -->
                <div class="space-y-1.5 text-[11px] text-slateText">
                  <div class="flex items-center gap-1.5">
                    <span class="text-emerald-600 font-bold" aria-hidden="true">✓</span>
                    <span>إنترنت فائق القوة ومستقر غير محدود مجاناً</span>
                  </div>
                  <div class="flex items-center gap-1.5">
                    <span class="text-emerald-600 font-bold" aria-hidden="true">✓</span>
                    <span>مياه نقية ومشروبات عشبية ساخنة ضيافة</span>
                  </div>
                  <div class="flex items-center gap-1.5">
                    <span class="text-emerald-600 font-bold" aria-hidden="true">✓</span>
                    <span>مواقف سيارات آمنة مجانية</span>
                  </div>
                </div>
              </div>

            <!-- Price Output -->
            <div class="pt-6 mt-4 border-t border-sage-200">
              <div class="flex items-baseline justify-between mb-3">
                <span class="text-sm font-bold text-sage-900">المجموع الصافي:</span>
                <div>
                  <span class="text-3xl font-extrabold text-sage-900" id="calcTotalPrice">162</span>
                  <span class="text-xs font-bold text-slateText-light">ج.م فقط</span>
                </div>
              </div>
              <button id="calcBookNowBtn" type="button" class="w-full py-3 rounded-xl bg-amberAccent hover:bg-amberAccent-dark text-alabaster font-bold text-sm shadow-md transition-all">
                حجز هذه الباقة مباشرة
              </button>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- AMENITIES SECTION -->
  <section id="amenities" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">كل ما يضمن راحة يومك</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">دليل مميزات وتجهيزات المكان</h2>
        <p class="text-slateText-light mt-3">صممنا كل ركن وتفصيلة لتوفر لك أعلى مستويات التركيز والإنتاجية دون عناء.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Amenity 1: Pure Reliable Internet Experience Card -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-sage-100 text-sage-800 flex items-center justify-center mb-5 text-2xl">
              📶
            </div>
            <h3 class="text-xl font-bold text-sage-900">إنترنت فائق القوة والموثوقية</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              شبكة إنترنت مزدوجة ومجهزة بأحدث تقنيات Wi-Fi المتقدمة لتضمن استقراراً تاماً وسرعة فائقة بدون أي انقطاع أو تباطؤ أثناء اجتماعاتك وأعمالك.
            </p>
          </div>

          <div class="mt-6 p-4 rounded-2xl bg-white border border-sage-200">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-emerald-500 live-pulse"></span>
              <div class="text-xs font-bold text-sage-900">اتصال مباشر ومستمر 24/7</div>
            </div>
            <p class="text-[11px] text-slateText-light mt-1">تغطية قوية في جميع المكاتب والقاعات بدون أي مناطق ميتة.</p>
          </div>
        </article>

        <!-- Amenity 2: Power and Outlets -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-amberAccent/15 text-amberAccent-dark flex items-center justify-center mb-5 text-2xl">
              🔌
            </div>
            <h3 class="text-xl font-bold text-sage-900">مقابس وشواحن عند كل مقعد</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              لن تبحث عن مقبس كهرباء أبداً. كل مكتب مجهز بمقابس كهربائية وشواحن USB و Type-C سريعة لشحن أجهزتك ومحمولك مباشرة وبأمان.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-sage-200/60 flex items-center gap-2 text-xs text-sage-700 font-semibold">
            <span>🛡️ مولد كهربائي احتياطي يضمن استمرار الطاقة فوراً</span>
          </div>
        </article>

        <!-- Amenity 3: Ergonomics and Chairs -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-sage-100 text-sage-800 flex items-center justify-center mb-5 text-2xl">
              🪑
            </div>
            <h3 class="text-xl font-bold text-sage-900">كراسي ومكاتب طبية مريحة</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              كراسي Ergonomic مريحة تدعم الظهر ومكاتب بارتفاعات مدروسة لتجلس ساعات طويلة بكامل طاقتك ودون أي إجهاد بدني.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-sage-200/60 flex items-center gap-2 text-xs text-sage-700 font-semibold">
            <span>✨ إضاءة طبيعية دافئة ومدروسة لراحة العين</span>
          </div>
        </article>

        <!-- Amenity 4: Specialty Coffee -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-amberAccent/15 text-amberAccent-dark flex items-center justify-center mb-5 text-2xl">
              ☕
            </div>
            <h3 class="text-xl font-bold text-sage-900">ركن قهوة مختصة ومشروبات أصيلة</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              محاصيل بن طازجة ومشروبات دافئة وباردة تُحضر بحرفية لتمنحك جرعة التركيز التي تحتاجها، مع خيارات ضيافة مجانية من المشروبات العشبية.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-sage-200/60 flex items-center gap-2 text-xs text-sage-700 font-semibold">
            <span>🌱 مياه نقية مبردة متوفرة طوال الوقت مجاناً</span>
          </div>
        </article>

        <!-- Amenity 5: Soundproofing & Noise Rules -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-sage-100 text-sage-800 flex items-center justify-center mb-5 text-2xl">
              🤫
            </div>
            <h3 class="text-xl font-bold text-sage-900">أجواء هدوء وتركيز تام</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              مناطق مخصصة بالكامل للعمل الهادئ والصامت، مع كبائن مكالمات معزولة بالكامل لإجراء اتصالاتك واجتماعاتك بحرية ودون إزعاج الآخرين.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-sage-200/60 flex items-center gap-2 text-xs text-sage-700 font-semibold">
            <span>🕊️ بيئة محترمة تضمن أقصى درجات السكينة الذهنية</span>
          </div>
        </article>

        <!-- Amenity 6: Parking & Location Ease -->
        <article class="p-8 rounded-3xl bg-alabaster border border-sage-100 flex flex-col justify-between hover:shadow-md transition-all">
          <div>
            <div class="w-12 h-12 rounded-2xl bg-sage-100 text-sage-800 flex items-center justify-center mb-5 text-2xl">
              🚗
            </div>
            <h3 class="text-xl font-bold text-sage-900">مواقف سيارات وسهولة وصول</h3>
            <p class="text-sm text-slateText-light mt-2 leading-relaxed">
              ساحة انتظار واسعة أمام المقر مباشرة، بالإضافة لأمن وحراسة على مدار الساعة ومصعد كهربائي متاح.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-sage-200/60 flex items-center gap-2 text-xs text-sage-700 font-semibold">
            <span>📍 موقع هادئ وسهل الوصول بعيداً عن الاختناقات</span>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- SECTION 4: Ambience Gallery -->
  <section id="gallery" class="py-20 bg-cream/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
        <div>
          <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">أجواء حقيقية 100%</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">معرض زوايا "الست"</h2>
          <p class="text-slateText-light mt-2">استكشف البيئة التي ستقضي فيها ساعاتك الأكثر إثماراً.</p>
        </div>

        <!-- Gallery Categories -->
        <div class="flex flex-wrap gap-2 mt-6 md:mt-0" id="galleryFilters" role="tablist" aria-label="أقسام المعرض">
          <button class="gallery-btn px-4 py-2 rounded-xl text-xs font-bold bg-sage-800 text-alabaster transition-all" data-filter="all" role="tab" aria-selected="true">الكل</button>
          <button class="gallery-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white text-slateText hover:bg-sage-100 transition-all" data-filter="focus" role="tab" aria-selected="false">المكاتب الفردية</button>
          <button class="gallery-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white text-slateText hover:bg-sage-100 transition-all" data-filter="meeting" role="tab" aria-selected="false">قاعات الاجتماعات</button>
          <button class="gallery-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white text-slateText hover:bg-sage-100 transition-all" data-filter="lounge" role="tab" aria-selected="false">الكافيه واللاونج</button>
        </div>
      </div>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="galleryGrid">
        
        <figure class="gallery-item focus group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?auto=format&fit=crop&w=1200&q=80" data-caption="منطقة العمل الصامتة والمقاعد المريحة" tabindex="0" role="button" aria-label="تكبير صورة: منطقة العمل الصامتة والمقاعد المريحة">
          <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?auto=format&fit=crop&w=600&q=80" alt="منطقة العمل الصامتة والمقاعد المريحة" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">منطقة العمل الصامتة والمقاعد المريحة</span>
          </figcaption>
        </figure>

        <figure class="gallery-item meeting group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1517502884422-41eaead166d4?auto=format&fit=crop&w=1200&q=80" data-caption="قاعة الاجتماعات الرئيسية مجهزة بشاشات عرض ذكية" tabindex="0" role="button" aria-label="تكبير صورة: قاعة الاجتماعات الرئيسية">
          <img src="https://images.unsplash.com/photo-1517502884422-41eaead166d4?auto=format&fit=crop&w=600&q=80" alt="قاعة اجتماعات" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">قاعة الاجتماعات الرئيسية مجهزة بشاشات ذكية</span>
          </figcaption>
        </figure>

        <figure class="gallery-item lounge group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1200&q=80" data-caption="ركن القهوة المختصة وجلسات الاستراحة المبهجة" tabindex="0" role="button" aria-label="تكبير صورة: ركن القهوة المختصة">
          <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=600&q=80" alt="كافيه الست" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">ركن القهوة المختصة وجلسات الاستراحة</span>
          </figcaption>
        </figure>

        <figure class="gallery-item focus group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1200&q=80" data-caption="مكاتب خاصة فردية مع إنارة طبيعية متوازنة" tabindex="0" role="button" aria-label="تكبير صورة: مكاتب خاصة فردية">
          <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=600&q=80" alt="مكتب مخصص" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">مكاتب خاصة فردية مع إنارة طبيعية</span>
          </figcaption>
        </figure>

        <figure class="gallery-item lounge group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=1200&q=80" data-caption="اللاونج المفتوح للتباحث وتبادل الأفكار" tabindex="0" role="button" aria-label="تكبير صورة: اللاونج المفتوح">
          <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=600&q=80" alt="لاونج العمل المشترك" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">اللاونج المفتوح لتبادل الأفكار</span>
          </figcaption>
        </figure>

        <figure class="gallery-item meeting group relative rounded-3xl overflow-hidden cursor-pointer h-72 shadow-md m-0" data-src="https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=1200&q=80" data-caption="كبائن المكالمات الفردية العازلة للصوت" tabindex="0" role="button" aria-label="تكبير صورة: كبائن المكالمات">
          <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=600&q=80" alt="كبينة اتصال" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-sage-950/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
            <span class="text-white text-sm font-bold">كبائن المكالمات الفردية العازلة للصوت</span>
          </figcaption>
        </figure>

      </div>

    </div>
  </section>

  <!-- SECTION 5: Booking Form -->
  <section id="booking" class="py-20 bg-cream/40">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center mb-12">
        <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">تأكيد حجزك في أقل من دقيقة</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">احجز مكانك في "الست"</h2>
        <p class="text-slateText-light mt-2">لا يتطلب الحجز بطاقة ائتمانية فورية، ادفع عند وصولك واستمتع بيومك.</p>
      </div>

      <!-- Booking Card Box -->
      <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-sage-100 relative overflow-hidden">
        
        <!-- Step Indicators -->
        <div class="flex items-center justify-between mb-8 border-b border-sage-100 pb-4">
          <div class="flex items-center gap-2 step-step-indicator" id="stepIndicator1">
            <span class="w-8 h-8 rounded-full bg-sage-800 text-alabaster flex items-center justify-center text-xs font-bold">1</span>
            <span class="text-xs sm:text-sm font-bold text-sage-900">المساحة والوقت</span>
          </div>
          <div class="h-0.5 flex-1 mx-4 bg-sage-200" id="stepLine"></div>
          <div class="flex items-center gap-2 step-step-indicator" id="stepIndicator2">
            <span class="w-8 h-8 rounded-full bg-sage-100 text-slateText flex items-center justify-center text-xs font-bold">2</span>
            <span class="text-xs sm:text-sm font-semibold text-slateText">البيانات والتأكيد</span>
          </div>
        </div>

        <form id="bookingForm" novalidate>
          
          <!-- Step 1 Content -->
          <div id="step1Content" class="space-y-6">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="bookDate" class="block text-xs font-bold text-sage-900 mb-2">اختر التاريخ:</label>
                <input type="date" id="bookDate" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600" required>
              </div>
              <div>
                <label for="bookTime" class="block text-xs font-bold text-sage-900 mb-2">وقت الوصول المتوقع:</label>
                <select id="bookTime" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600">
                  <option value="09:00 ص">09:00 صباحاً</option>
                  <option value="11:00 ص">11:00 صباحاً</option>
                  <option value="01:00 م">01:00 ظهراً</option>
                  <option value="04:00 م">04:00 عصراً</option>
                  <option value="06:00 م">06:00 مساءً</option>
                </select>
              </div>
            </div>

            <div>
              <label for="bookSpaceType" class="block text-xs font-bold text-sage-900 mb-2">نوع الحجز والمقعد:</label>
              <select id="bookSpaceType" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600">
                <option value="مكتب مرن (Flex Desk)">مكتب مرن مشترك (Flex Desk)</option>
                <option value="مكتب مخصص هادئ">مكتب مخصص هادئ (Dedicated Desk)</option>
                <option value="غرفة اجتماعات صغيرة (4 أفراد)">غرفة اجتماعات صغيرة (4 أفراد)</option>
                <option value="قاعة اجتماعات أم كلثوم (10 أفراد)">قاعة اجتماعات كبرى (10 أفراد)</option>
              </select>
            </div>

            <div class="flex justify-end pt-4">
              <button type="button" id="goToStep2Btn" class="px-8 py-3 rounded-xl bg-sage-800 text-alabaster font-bold text-sm hover:bg-sage-900 transition-all">
                المتابعة للخطوة التالية ←
              </button>
            </div>

          </div>

          <!-- Step 2 Content -->
          <div id="step2Content" class="hidden space-y-6">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="custName" class="block text-xs font-bold text-sage-900 mb-2">الاسم الكامل:</label>
                <input type="text" id="custName" placeholder="مثال: أحمد عبد الله" autocomplete="name" enterkeyhint="next" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600" required>
              </div>
              <div>
                <label for="custPhone" class="block text-xs font-bold text-sage-900 mb-2">رقم الهاتف / واتساب:</label>
                <input type="tel" id="custPhone" placeholder="010XXXXXXXX" autocomplete="tel" inputmode="tel" enterkeyhint="next" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600" required>
              </div>
            </div>

            <div>
              <label for="custNotes" class="block text-xs font-bold text-sage-900 mb-2">ملاحظات خاصة أو طلب تجهيزات معينة:</label>
              <textarea id="custNotes" rows="2" placeholder="هل تحتاج كابل HDMI أو تجهيز شاشة محددة؟" class="w-full p-3 rounded-xl border border-sage-200 text-sm focus:outline-none focus:border-sage-600"></textarea>
            </div>

            <div class="flex items-center justify-between pt-4">
              <button type="button" id="backToStep1Btn" class="px-6 py-2.5 rounded-xl border border-sage-200 text-slateText text-sm font-medium hover:bg-sage-50">
                → العودة لتعديل الموعد
              </button>
              <button type="submit" id="confirmBookingBtn" class="px-8 py-3 rounded-xl bg-amberAccent hover:bg-amberAccent-dark text-alabaster font-bold text-sm shadow-md transition-all">
                تأكيد الحجز الفوري
              </button>
            </div>

          </div>

        </form>

        <!-- Digital Boarding Pass Result -->
        <div id="bookingResult" class="hidden pt-6" role="region" aria-live="polite">
          <div class="p-6 rounded-2xl bg-sage-50 border-2 border-dashed border-sage-300 text-center relative">
            <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto text-xl mb-3" aria-hidden="true">
              ✓
            </div>
            <h3 class="text-xl font-bold text-sage-900">تم تأكيد حجزك بنجاح! ننتظرك في الست</h3>
            <p class="text-xs text-slateText-light mt-1">احتفظ ببيانات بطاقة الدخول الرقمية هذه:</p>

            <a id="waSendLink" href="https://wa.me/201010379368" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-bold shadow-md transition-all">
              أرسل الحجز على واتساب
            </a>
            <div class="max-w-md mx-auto my-6 p-4 rounded-xl bg-white text-right border border-sage-200 shadow-sm text-xs space-y-2">
              <div class="flex justify-between border-b border-sage-100 pb-1.5">
                <span class="text-slateText-light">رقم الحجز المرجعي:</span>
                <span class="font-bold text-sage-900 font-mono" id="resRef">ST-8941</span>
              </div>
              <div class="flex justify-between border-b border-sage-100 pb-1.5">
                <span class="text-slateText-light">اسم الرواد:</span>
                <span class="font-bold text-sage-900" id="resName">-</span>
              </div>
              <div class="flex justify-between border-b border-sage-100 pb-1.5">
                <span class="text-slateText-light">المساحة:</span>
                <span class="font-bold text-sage-900" id="resSpace">-</span>
              </div>
              <div class="flex justify-between border-b border-sage-100 pb-1.5">
                <span class="text-slateText-light">الموعد المحدد:</span>
                <span class="font-bold text-sage-900" id="resDateTime">-</span>
              </div>
              <div class="flex justify-between text-emerald-700 font-bold">
                <span>حالة الدفع:</span>
                <span>عند الوصول بالمقر (نقداً / بطاقة)</span>
              </div>
            </div>

            <button type="button" onclick="window.print()" class="px-5 py-2 rounded-xl bg-sage-800 text-alabaster text-xs font-bold hover:bg-sage-900">
              طباعة أو حفظ التذكرة PDF
            </button>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 7: Smart FAQ -->
  <section id="faq" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center mb-14">
        <span class="text-xs uppercase tracking-widest text-amberAccent font-bold">إجابات فورية بدون انتظار</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-sage-900 mt-2">الأسئلة الشائعة والأجوبة الدقيقة</h2>
      </div>

      <div class="space-y-4" id="faqAccordion">
        
        <div class="faq-item rounded-2xl border border-sage-100 bg-alabaster overflow-hidden">
          <button type="button" class="faq-trigger w-full p-5 text-right flex items-center justify-between font-bold text-sage-900 text-sm hover:text-sage-700 transition-colors" aria-expanded="false">
            <span>هل يمكنني الحضور مباشرة دون حجز مسبق عبر الموقع؟</span>
            <span class="faq-icon text-lg transform transition-transform duration-200" aria-hidden="true">＋</span>
          </button>
          <div class="faq-content hidden px-5 pb-5 text-xs sm:text-sm text-slateText leading-relaxed">
            نعم بالتأكيد! يمكنك الحضور في أي وقت خلال ساعات العمل (من 8 صباحاً حتى منتصف الليل). مؤشر "النبض المباشر" في أعلى الصفحة يوضح لك عدد المقاعد الشاغرة بدقة قبل تحركك.
          </div>
        </div>

        <div class="faq-item rounded-2xl border border-sage-100 bg-alabaster overflow-hidden">
          <button type="button" class="faq-trigger w-full p-5 text-right flex items-center justify-between font-bold text-sage-900 text-sm hover:text-sage-700 transition-colors" aria-expanded="false">
            <span>كيف تتعاملون مع مكالمات العمل والاجتماعات الهاتفية؟</span>
            <span class="faq-icon text-lg transform transition-transform duration-200" aria-hidden="true">＋</span>
          </button>
          <div class="faq-content hidden px-5 pb-5 text-xs sm:text-sm text-slateText leading-relaxed">
            للحفاظ على تركيز الجميع، يمنع إجراء المكالمات في "منطقة العمل الصامتة". نوفر 3 كبائن عازلة للصوت بالكامل (Phone Booths) يمكنك دخولها مجاناً لإجراء مكالماتك واجتماعات الزووم بحرية تامة دون إزعاج أحد.
          </div>
        </div>

        <div class="faq-item rounded-2xl border border-sage-100 bg-alabaster overflow-hidden">
          <button type="button" class="faq-trigger w-full p-5 text-right flex items-center justify-between font-bold text-sage-900 text-sm hover:text-sage-700 transition-colors" aria-expanded="false">
            <span>هل يسمح بإحضار مأكولات خارجية؟</span>
            <span class="faq-icon text-lg transform transition-transform duration-200" aria-hidden="true">＋</span>
          </button>
          <div class="faq-content hidden px-5 pb-5 text-xs sm:text-sm text-slateText leading-relaxed">
            يُسمح بتناول الوجبات الخفيفة والساندويتشات في منطقة الكافيه واللاونج المفتوح، وتجنب الوجبات ذات الروائح النفاذة في مناطق المكاتب الصامتة حفاظاً على جودة الهواء وراحة الزملاء. كما تتوفر لدينا تشكيلة وجبات خفيفة صحية ومخبوزات طازجة يومياً.
          </div>
        </div>

        <div class="faq-item rounded-2xl border border-sage-100 bg-alabaster overflow-hidden">
          <button type="button" class="faq-trigger w-full p-5 text-right flex items-center justify-between font-bold text-sage-900 text-sm hover:text-sage-700 transition-colors" aria-expanded="false">
            <span>ما مدى قوة واستقرار الإنترنت لديكم؟</span>
            <span class="faq-icon text-lg transform transition-transform duration-200" aria-hidden="true">＋</span>
          </button>
          <div class="faq-content hidden px-5 pb-5 text-xs sm:text-sm text-slateText leading-relaxed">
            الإنترنت مخدوم بخطين ألياف ضوئية منفصلين مع تحويل فوري تلقائي عند أي طارئ، بالإضافة لمولدات طاقة كهربائية خاصة بالراوترات لضمان اتصال قوي وثابت بدون انقطاع ثانية واحدة أثناء اجتماعاتك وأعمالك الحساسة.
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- STRICT CONDUCT & RESPECT POLICY BANNER -->
  <aside aria-label="ميثاق الذوق العام" class="py-8 bg-cream/70 border-t border-sage-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="p-6 sm:p-7 rounded-3xl bg-red-950/90 text-white border-2 border-red-500/30 shadow-xl flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-right relative overflow-hidden">
        <!-- Warning Icon -->
        <div class="w-14 h-14 rounded-2xl bg-red-500/20 text-red-400 border border-red-500/40 flex items-center justify-center text-2xl font-bold flex-shrink-0" aria-hidden="true">
          ⚠️
        </div>
        <!-- Warning Content -->
        <div class="space-y-1.5 flex-1">
          <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
            <span class="px-2.5 py-0.5 rounded-full bg-red-500 text-white text-[11px] font-black tracking-wider uppercase">تحذير صارم وقاطع</span>
            <h3 class="text-base sm:text-lg font-extrabold text-red-100">ميثاق الاحترام والذوق العام داخل "الست"</h3>
          </div>
          <p class="text-xs sm:text-sm text-red-200 font-semibold leading-relaxed">
            مساحة العمل مخصصة للمحترفين والمبدعين فقط. <strong class="text-white underline decoration-red-400 decoration-2">أي لفظ خارج أو تصرف غير لائق سيتسبب في طردك من المكان فوراً</strong> دون أي نقاش وبلا استرجاع لقيمة الحجز أو الرسوم حفاظاً على راحة وكرامة الجميع.
          </p>
        </div>
      </div>
    </div>
  </aside>
  </main>



  <!-- Footer -->
  <footer class="bg-sage-900 text-alabaster pt-16 pb-10 border-t border-sage-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-sage-800/80">
        
        <!-- Brand Info -->
        <div class="space-y-4 md:col-span-1">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-alabaster text-sage-900 flex items-center justify-center font-bold text-xl">
              س
            </div>
            <span class="text-2xl font-bold tracking-tight text-alabaster">الـسّـت</span>
          </div>
          <p class="text-xs text-sage-100/70 leading-relaxed">
            مساحة عمل مصممة لتهيئة الذهن وإشعال شرارة الإبداع، حيث يلتقي الهدوء بالخدمة الفندقية الراقية.
          </p>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-sm font-bold text-amberAccent mb-3">التنقل السريع</h4>
          <ul class="space-y-2 text-xs text-sage-100/80">
            <li><a href="#live-vibe" class="hover:text-amberAccent">مؤشر السعة الحية</a></li>
            <li><a href="#drinks-bar" class="hover:text-amberAccent">مشروبات وقهوة الست</a></li>
            <li><a href="#calculator" class="hover:text-amberAccent">حاسبة الأسعار</a></li>
            <li><a href="#amenities" class="hover:text-amberAccent">مميزات وتجهيزات المكان</a></li>
          </ul>
        </div>

        <!-- Working Hours & Contact -->
        <div>
          <h4 class="text-sm font-bold text-amberAccent mb-3">أوقات العمل والتواصل</h4>
          <ul class="space-y-2 text-xs text-sage-100/80">
            <li>يومياً: 8:00 صباحاً – 12:00 منتصف الليل</li>
            <li>الجمعة: 1:00 ظهراً – 12:00 منتصف الليل</li>
            <li>هاتف / واتساب: 01010379368</li>
            <li>البريد: hello@elsitt-space.com</li>
          </ul>
        </div>

        <!-- Location -->
        <div>
          <h4 class="text-sm font-bold text-amberAccent mb-3">الموقع والوصول</h4>
          <p class="text-xs text-sage-100/80 leading-relaxed mb-3">
            حي المعادي الهادئ، دجلة، القاهرة. بالقرب من المترو ومواقف السيارات متوفرة مجاناً لروادنا.
          </p>
          <div class="inline-block px-3 py-1.5 rounded-lg bg-sage-800 text-[11px] text-amberAccent-light font-medium">
            🅿️ ساحة سيارات مخصصة وآمنة
          </div>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-sage-100/60 gap-4">
        <div>جميع الحقوق محفوظة © <span id="currentYear"></span> مساحة عمل الست (El Sitt Workspace).</div>
        <div class="flex gap-4">
          <a href="#" class="hover:text-alabaster">سياسة الخصوصية</a>
          <span>•</span>
          <a href="#" class="hover:text-alabaster">شروط الاستخدام</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- COLD DRINKS MODAL (قائمة المشروبات المثلجة المنعشة) -->
  <div id="coldDrinksModal" class="fixed inset-0 z-50 bg-black/80 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="coldDrinksModalTitle">
    <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-2xl w-full relative shadow-2xl border border-sage-100 max-h-[90vh] overflow-y-auto text-right">
      <!-- BACK Button (رجوع فوري) -->
      <button id="closeColdDrinksModal" type="button" class="absolute top-4 left-4 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs font-bold transition-all shadow-md group" aria-label="رجوع">
        <span class="transform group-hover:-translate-x-1 transition-transform text-sm">←</span>
        <span>رجوع / BACK</span>
      </button>

      <div class="flex items-center gap-2 mb-2">
        <span class="text-xl">❄️</span>
        <span class="text-xs px-3 py-1 rounded-full bg-blue-50 text-blue-800 font-bold">باريستا الست • مشروبات مثلجة</span>
      </div>
      <h3 id="coldDrinksModalTitle" class="text-2xl font-extrabold text-sage-900">المشروبات المثلجة والمنعشة (Cold Drinks)</h3>
      <p class="text-xs sm:text-sm text-slateText-light mt-1">اختر مشروبك المثلج لتقديمه مباشرة لطاولتك في ثوانٍ معدودة:</p>

      <!-- Grid of Cold Drinks -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
        
        <!-- Cold Item 1 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">آيس سبانش لاتيه (Spanish Latte)</span>
              <span class="text-xs font-bold text-amberAccent-dark">45 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">إسبريسو أرابيكا مزدوج، حليب بارد مع حليب مكثف محلى ومكعبات ثلج نقية.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="آيس سبانش لاتيه">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

        <!-- Cold Item 2 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">كركديه أسواني مثلج (عشمة الست)</span>
              <span class="text-xs font-bold text-amberAccent-dark">35 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">أوراق كركديه أسواني منقوع على البارد ومحلى بعسل النحل مع لمسة نعناع بلدي.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="كركديه أسواني مثلج">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

        <!-- Cold Item 3 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">آيس ماتشا لاتيه (Iced Matcha)</span>
              <span class="text-xs font-bold text-amberAccent-dark">55 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">ماتشا يابانية عضوية فاخرة مخفوقة مع حليب بارد لطاقة هادئة ومستدامة.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="آيس ماتشا لاتيه">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

        <!-- Cold Item 4 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">ليموناضة بالنعناع الفريش</span>
              <span class="text-xs font-bold text-amberAccent-dark">30 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">عصير ليمون طبيعي معصور طازجاً مع نعناع أخضر وقطع ثلج مجروشة.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="ليموناضة بالنعناع الفريش">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

        <!-- Cold Item 5 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">آيس أمريكانو مثلج (Iced Americano)</span>
              <span class="text-xs font-bold text-amberAccent-dark">40 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">شوت إسبريسو مزدوج مصفى على ماء مثلج لنكهة قهوة خالصة ومنعشة.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="آيس أمريكانو مثلج">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

        <!-- Cold Item 6 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">مياه معدنية مثلجة نقية</span>
              <span class="text-xs font-bold text-amberAccent-dark">15 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">زجاجة مياه معدنية طبيعية باردة ومنعشة متوفرة دائماً أثناء جلسات العمل.</p>
          </div>
          <button type="button" class="quick-cold-order-btn mt-3 w-full py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors" data-drink="مياه معدنية مثلجة">
            اطلب الآن لمقعدك ❄️
          </button>
        </div>

      </div>

      <!-- Quick Feedback Alert -->
      <div id="coldOrderAlert" class="hidden mt-4 p-3 rounded-2xl bg-emerald-50 text-emerald-800 text-xs font-bold text-center" role="alert">
        ✓ تم استلام طلبك بنجاح! سيتم تجهيز المشروب المثلج وإحضاره لمقعدك خلال دقائق.
      </div>

    </div>
  </div>

  <!-- HOT DRINKS MODAL (قائمة المشروبات الساخنة والقهوة المختصة) -->
  <div id="hotDrinksModal" class="fixed inset-0 z-50 bg-black/80 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="hotDrinksModalTitle">
    <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-2xl w-full relative shadow-2xl border border-sage-100 max-h-[90vh] overflow-y-auto text-right">
      <!-- BACK Button (رجوع فوري) -->
      <button id="closeHotDrinksModal" type="button" class="absolute top-4 left-4 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs font-bold transition-all shadow-md group" aria-label="رجوع">
        <span class="transform group-hover:-translate-x-1 transition-transform text-sm">←</span>
        <span>رجوع / BACK</span>
      </button>

      <div class="flex items-center gap-2 mb-2">
        <span class="text-xl">☕</span>
        <span class="text-xs px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-bold">باريستا الست • مشروبات ساخنة</span>
      </div>
      <h3 id="hotDrinksModalTitle" class="text-2xl font-extrabold text-sage-900">المشروبات الساخنة والقهوة المختصة (Hot Drinks)</h3>
      <p class="text-xs sm:text-sm text-slateText-light mt-1">اختر مشروبك الساخن وخصص كمية السكر المفضلة لديك:</p>

      <!-- Sugar Customizer Inside Hot Modal -->
      <div class="my-5 p-4 rounded-2xl bg-cream/70 border border-sage-200">
        <label class="block text-xs font-bold text-sage-900 mb-2">تخصيص كمية السكر لطلبك:</label>
        <div class="grid grid-cols-3 gap-2" role="radiogroup" aria-label="مستوى السكر">
          <button type="button" class="hot-modal-sugar-btn py-2 px-2 rounded-xl border border-sage-200 bg-white text-slateText text-xs font-bold transition-all hover:border-sage-600" data-sugar="سادة (بدون سكر)">سادة 🛑</button>
          <button type="button" class="hot-modal-sugar-btn py-2 px-2 rounded-xl border border-sage-600 bg-sage-800 text-alabaster text-xs font-bold transition-all shadow-sm" data-sugar="مظبوط (معتدل)">مظبوط ⚖️</button>
          <button type="button" class="hot-modal-sugar-btn py-2 px-2 rounded-xl border border-sage-200 bg-white text-slateText text-xs font-bold transition-all hover:border-sage-600" data-sugar="زيادة (مسكر)">زيادة 🍯</button>
        </div>
        <p class="text-[11px] text-sage-600 mt-2 text-center" id="hotModalSugarNote">الخيار المعتمد: مظبوط (معتدل)</p>
      </div>

      <!-- Grid of Hot Drinks -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        
        <!-- Hot Item 1 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">قهوة تركي على الرملة</span>
              <span class="text-xs font-bold text-amberAccent-dark">35 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">قهوة أرابيكا أصيلة محضرة ببطء على الرمال الساخنة برغوة مخملية وهيل.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="قهوة تركي على الرملة">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

        <!-- Hot Item 2 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">شاي بلدي مخدوم (عشمة الست)</span>
              <span class="text-xs font-bold text-amberAccent-dark">25 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">شاي أحمر صافي منتقى بعناية مع أوراق النعناع البلدي الفريش ومياه نقية.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="شاي بلدي مخدوم بالنعناع">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

        <!-- Hot Item 3 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">فلات وايت (Specialty Flat White)</span>
              <span class="text-xs font-bold text-amberAccent-dark">50 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">دبل شوت إسبريسو مع طبقة حريرية من حليب المايكروفوم الدافئ لمزاج صريح.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="فلات وايت">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

        <!-- Hot Item 4 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">شاي حليب أو كرك دافئ</span>
              <span class="text-xs font-bold text-amberAccent-dark">35 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">شاي مطبوخ بالحليب المبخر والمحلى مع نكهات الهيل والزعفران المريحة.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="شاي حليب أو كرك">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

        <!-- Hot Item 5 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">هوت شوكلت بلجيكي فاخر</span>
              <span class="text-xs font-bold text-amberAccent-dark">45 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">شوكولاتة بلجيكية داكنة مذوبة في حليب كامل الدسم دافئ مع رشة كاكاو نقي.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="هوت شوكلت بلجيكي">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

        <!-- Hot Item 6 -->
        <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-1.5">
              <span class="text-sm font-bold text-sage-900">أعشاب سانت كاترين وسيناء</span>
              <span class="text-xs font-bold text-amberAccent-dark">30 ج.م</span>
            </div>
            <p class="text-xs text-slateText-light leading-relaxed">توليفة طبيعية من البابونج والحبق السيناوي والمرمرية لتهدئة الذهن والأعصاب.</p>
          </div>
          <button type="button" class="quick-hot-order-btn mt-3 w-full py-2 rounded-xl bg-amber-700 hover:bg-amber-800 text-white text-xs font-bold transition-colors" data-drink="أعشاب سيناء الهادئة">
            اطلب الآن بالسكر المختار ☕
          </button>
        </div>

      </div>

      <!-- Quick Feedback Alert -->
      <div id="hotOrderAlert" class="hidden mt-4 p-3 rounded-2xl bg-emerald-50 text-emerald-800 text-xs font-bold text-center" role="alert">
        ✓ تم استلام طلبك بنجاح! سيتم تحضير المشروب الساخن وإحضاره لمقعدك خلال دقائق.
      </div>

    </div>
  </div>

  <!-- DRINK DETAIL & SUGAR CUSTOMIZER MODAL (Enhanced Accessibility & Focus Trapping) -->
  <div id="drinkModal" class="fixed inset-0 z-50 bg-black/80 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="modalDrinkTitle">
    <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full relative shadow-2xl border border-sage-100">
      <!-- Back / Close Button on Top Left -->
      <button id="closeDrinkModal" type="button" class="absolute top-4 left-4 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs font-bold transition-all shadow-md group" aria-label="رجوع">
        <span class="transform group-hover:-translate-x-1 transition-transform text-sm">←</span>
        <span>رجوع / BACK</span>
      </button>
      
      <div class="text-right">
        <span id="modalDrinkCategoryTag" class="text-xs px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold">مشروب ساخن</span>
        <h3 id="modalDrinkTitle" class="text-2xl font-bold text-sage-900 mt-2">قهوة تركي على الرملة</h3>
        <p id="modalDrinkDesc" class="text-sm text-slateText-light mt-2 leading-relaxed">وصف المشروب والتفاصيل هنا...</p>
        
        <div class="mt-4 p-3 rounded-2xl bg-alabaster border border-sage-200 text-xs text-slateText">
          <span class="font-bold text-sage-900">المكونات الأساسية: </span>
          <span id="modalDrinkIngredients">-</span>
        </div>

        <!-- Sugar Level Selector (Appears for Hot Drinks & Coffees) -->
        <div id="sugarCustomizerBox" class="mt-6 pt-5 border-t border-sage-100">
          <span class="block text-sm font-bold text-sage-900 mb-3">اختر كمية ومستوى السكر (تفضيل الرواد):</span>
          <div class="grid grid-cols-3 gap-3" role="radiogroup" aria-label="كمية السكر">
            <button type="button" role="radio" aria-checked="false" class="sugar-btn py-2.5 px-3 rounded-xl border border-sage-200 bg-white text-slateText hover:border-sage-600 text-xs font-bold transition-all" data-sugar="سادة (بدون سكر)">
              سادة 🛑
            </button>
            <button type="button" role="radio" aria-checked="true" class="sugar-btn py-2.5 px-3 rounded-xl border border-sage-600 bg-sage-800 text-alabaster text-xs font-bold transition-all shadow-sm" data-sugar="مظبوط (معتدل)">
              مظبوط ⚖️
            </button>
            <button type="button" role="radio" aria-checked="false" class="sugar-btn py-2.5 px-3 rounded-xl border border-sage-200 bg-white text-slateText hover:border-sage-600 text-xs font-bold transition-all" data-sugar="زيادة (مسكر)">
              زيادة 🍯
            </button>
          </div>
          <p class="text-[11px] text-sage-600 mt-2 text-center" id="selectedSugarNote">الخيار الحالي: مظبوط (معتدل)</p>
        </div>

        <div class="mt-8 pt-4 border-t border-sage-100 flex items-center justify-between">
          <button id="orderDrinkNowBtn" type="button" class="w-full py-3 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster font-bold text-sm shadow-md transition-all">
            تأكيد الطلب وإرساله لطاولة العمل
          </button>
        </div>

        <div id="orderSuccessAlert" class="hidden mt-3 p-3 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold text-center" role="alert">
          ✓ تم تسجيل طلبك بنجاح! سيصلك خلال دقائق إلى مقعدك.
        </div>
      </div>
    </div>
  </div>

  <!-- Lightbox Modal for Gallery (Accessible Dialog) -->
  <div id="lightboxModal" class="fixed inset-0 z-50 bg-black/90 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-label="عرض الصورة المكبرة">
    <button id="closeLightbox" type="button" aria-label="إغلاق الصورة المكبرة" class="absolute top-6 right-6 text-white text-3xl font-light hover:text-amberAccent transition-colors">✕</button>
    <div class="max-w-4xl max-h-[85vh] text-center">
      <img id="lightboxImg" src="" alt="صورة مكبرة" class="max-w-full max-h-[75vh] mx-auto rounded-2xl object-contain shadow-2xl">
      <p id="lightboxCaption" class="text-alabaster text-sm font-medium mt-4"></p>
    </div>
  </div>

  <!-- LIVE VIBE POPUP MODAL (مؤشر النبض والهدوء الحيوي) -->
  <div id="vibeModal" class="fixed inset-0 z-50 bg-black/80 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="vibeModalTitle">
    <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-2xl w-full relative shadow-2xl border border-sage-100 max-h-[90vh] overflow-y-auto">
      <!-- BACK Button (رجوع فوري) -->
      <button id="closeVibeModal" type="button" class="absolute top-4 left-4 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs font-bold transition-all shadow-md group" aria-label="رجوع">
        <span class="transform group-hover:-translate-x-1 transition-transform text-sm">←</span>
        <span>رجوع / BACK</span>
      </button>

      <div class="text-right">
        <div class="flex items-center gap-2 mb-2">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 live-pulse"></span>
          <span class="text-xs px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 font-bold">تحديث حي ومباشر</span>
        </div>
        <h3 id="vibeModalTitle" class="text-2xl font-extrabold text-sage-900">مؤشر النبض والهدوء الحيوي (Live Vibe)</h3>
        <p class="text-xs sm:text-sm text-slateText-light mt-1">حالة السعة الفورية وتوفر المقاعد والأجواء بكل ركن في "الست":</p>

        <!-- Live Zones Inside Modal -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
          
          <!-- Zone 1: Silent Focus -->
          <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm font-bold text-sage-900">ملاذ التركيز الصامت</span>
              <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-bold">متاح شاغر</span>
            </div>
            <div class="flex justify-between text-xs text-slateText mb-1">
              <span>نسبة الإشغال:</span>
              <span class="font-bold text-sage-900" id="modal-occ-silent">45%</span>
            </div>
            <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden mb-2">
              <div class="h-full bg-emerald-500 rounded-full" id="modal-bar-silent" style="width: 45%"></div>
            </div>
            <div class="text-[11px] text-slateText-light flex justify-between">
              <span>الأجواء: <strong>هدوء وتركيز تام</strong></span>
              <span>الشاغر: <strong id="modal-seats-silent">7 مكاتب</strong></span>
            </div>
          </div>

          <!-- Zone 2: Collaboration Lounge -->
          <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm font-bold text-sage-900">لاونج العمل والكافيه</span>
              <span class="text-xs px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 font-bold">حركة معتدلة</span>
            </div>
            <div class="flex justify-between text-xs text-slateText mb-1">
              <span>نسبة الإشغال:</span>
              <span class="font-bold text-sage-900" id="modal-occ-cafe">68%</span>
            </div>
            <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden mb-2">
              <div class="h-full bg-amberAccent rounded-full" id="modal-bar-cafe" style="width: 68%"></div>
            </div>
            <div class="text-[11px] text-slateText-light flex justify-between">
              <span>النت: <strong>فائق ومستقر</strong></span>
              <span>الشاغر: <strong id="modal-seats-cafe">6 طاولات</strong></span>
            </div>
          </div>

          <!-- Zone 3: Meeting Pods -->
          <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm font-bold text-sage-900">كبائن المكالمات (Phone Pods)</span>
              <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-bold">2 شاغرة</span>
            </div>
            <div class="text-xs text-slateText mb-1">عزل صوتي كامل لاجتماعاتك ومكالماتك</div>
            <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden mb-2">
              <div class="h-full bg-emerald-500 rounded-full" style="width: 50%"></div>
            </div>
            <div class="text-[11px] text-slateText-light">
              الشاغر الحالي: <strong>كبينتان متوفرتان الآن مجاناً</strong>
            </div>
          </div>

          <!-- Zone 4: Meeting Room -->
          <div class="p-4 rounded-2xl bg-alabaster border border-sage-200 shadow-sm">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm font-bold text-sage-900">قاعة اجتماعات "أم كلثوم"</span>
              <span class="text-xs px-2 py-0.5 rounded-full bg-sage-100 text-sage-800 font-bold">جاهزة للحجز</span>
            </div>
            <div class="text-xs text-slateText mb-1">شاشات ذكية تفاعلية وضيافة خاصة</div>
            <div class="w-full h-2 rounded-full bg-sage-100 overflow-hidden mb-2">
              <div class="h-full bg-sage-600 rounded-full" style="width: 100%"></div>
            </div>
            <div class="text-[11px] text-slateText-light">
              السعة: <strong>تتسع حتى 10 أفراد بأريحية</strong>
            </div>
          </div>

        </div>

        <!-- Actions -->
        <div class="mt-6 pt-4 border-t border-sage-100 flex flex-wrap items-center justify-between gap-3">
          <button id="modalRefreshVibeBtn" type="button" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-sage-100 text-sage-800 text-xs font-bold hover:bg-sage-200 transition-colors">
            <span id="modalRefreshIcon">🔄</span>
            <span>تحديث النسب الحية الآن</span>
          </button>
          <a href="#booking" id="modalVibeBookBtn" class="px-6 py-2.5 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs sm:text-sm font-bold shadow-md transition-all">
            احجز مقعدك الآن
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- CALCULATOR POPUP MODAL (حاسبة الباقات والأسعار) -->
  <div id="calcModal" class="fixed inset-0 z-50 bg-black/80 hidden items-center justify-center p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="calcModalTitle">
    <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-xl w-full relative shadow-2xl border border-sage-100 max-h-[90vh] overflow-y-auto">
      <!-- BACK Button (رجوع فوري) -->
      <button id="closeCalcModal" type="button" class="absolute top-4 left-4 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sage-800 hover:bg-sage-900 text-alabaster text-xs font-bold transition-all shadow-md group" aria-label="رجوع">
        <span class="transform group-hover:-translate-x-1 transition-transform text-sm">←</span>
        <span>رجوع / BACK</span>
      </button>

      <div class="text-right">
        <div class="flex items-center gap-2 mb-2">
          <span class="text-sm">🧮</span>
          <span class="text-xs px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-bold">تقدير فوري بدون رسوم خفية</span>
        </div>
        <h3 id="calcModalTitle" class="text-2xl font-extrabold text-sage-900">حاسبة الباقات والأسعار الفورية</h3>
        <p class="text-xs text-slateText-light mt-1">احسب تكلفتك المباشرة واختر الباقة المناسبة لك بنقرة واحدة:</p>

        <!-- Quick Controls -->
        <div class="space-y-4 mt-5">
          <!-- Type -->
          <div>
            <label class="block text-xs font-bold text-sage-900 mb-1.5">نوع المساحة:</label>
            <div class="grid grid-cols-3 gap-2" role="group">
              <button type="button" class="modal-space-btn py-2 px-2 rounded-xl border border-sage-600 bg-sage-800 text-alabaster text-xs font-bold transition-all" data-rate="45" data-title="مكتب مرن (Flex Desk)">مكتب مرن (45ج)</button>
              <button type="button" class="modal-space-btn py-2 px-2 rounded-xl border border-sage-200 bg-white text-slateText text-xs font-semibold transition-all" data-rate="75" data-title="مكتب مخصص هادئ">مخصص (75ج)</button>
              <button type="button" class="modal-space-btn py-2 px-2 rounded-xl border border-sage-200 bg-white text-slateText text-xs font-semibold transition-all" data-rate="250" data-title="قاعة اجتماعات">اجتماعات (250ج)</button>
            </div>
          </div>

          <!-- Duration -->
          <div>
            <div class="flex justify-between items-center text-xs mb-1">
              <span class="font-bold text-sage-900">المدة المطلوبة:</span>
              <span class="font-bold text-amberAccent-dark" id="modalDurationDisplay">4 ساعات</span>
            </div>
            <input type="range" id="modalDurationSlider" min="1" max="12" value="4" class="w-full cursor-pointer">
          </div>

          <!-- Price Output Box -->
          <div class="p-4 rounded-2xl bg-sage-50 border border-sage-200 text-xs space-y-1.5">
            <div class="flex justify-between">
              <span class="text-slateText">المساحة المختارة:</span>
              <span class="font-bold text-sage-900" id="modalSpaceTitle">مكتب مرن (Flex Desk)</span>
            </div>
            <div class="flex justify-between text-emerald-700">
              <span>خصم الساعات (+4 س):</span>
              <span class="font-bold" id="modalDiscountDisplay">-18 ج.م</span>
            </div>
            <div class="flex items-baseline justify-between pt-2 border-t border-sage-200">
              <span class="font-bold text-sm text-sage-900">المجموع الصافي:</span>
              <div>
                <span class="text-2xl font-black text-sage-900" id="modalTotalPrice">162</span>
                <span class="text-xs font-bold text-slateText-light"> ج.م فقط</span>
              </div>
            </div>
          </div>

          <!-- CTA inside modal -->
          <button id="modalBookNowBtn" type="button" class="w-full py-3 rounded-xl bg-amberAccent hover:bg-amberAccent-dark text-alabaster font-bold text-sm shadow-md transition-all">
            حجز هذه الباقة فوراً والانتقال للبيانات ←
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ========================================================================= -->
  <!-- HIGH-PERFORMANCE ENTERPRISE JAVASCRIPT (ES2024 / RAF / STATE STORE / APIS) -->
  <!-- ========================================================================= -->
  <script>
    /**
     * El Sitt Boutique Workspace - Enterprise Application Controller
     * Built with Advanced Modern JavaScript (ES2024 standards):
     * - Reactive State Management Store with localStorage persistence
     * - Physics-based 120fps Calligraphy Tilt via requestAnimationFrame (RAF)
     * - IntersectionObserver for High-Performance Header elevation & Progress Bars
     * - Native Accessibility (ARIA Live, focus management, Escape key dismiss)
     * - Constraint Validation API
     * - Cached Virtual TreeWalker for I18n
     */
    (() => {
      "use strict";

      // -------------------------------------------------------------
      // 1. Reactive State Store with LocalStorage Persistence
      // -------------------------------------------------------------
      const ElSittStore = {
        state: {
          lang: localStorage.getItem('elsitt_lang') || 'ar',
          hourlyRate: 45,
          spaceName: "مكتب مشترك (Flex Desk)",
          selectedSugar: localStorage.getItem('elsitt_sugar') || 'مظبوط (معتدل)',
          lastOrder: null
        },
        set(key, value) {
          this.state[key] = value;
          if (key === 'lang') localStorage.setItem('elsitt_lang', value);
          if (key === 'selectedSugar') localStorage.setItem('elsitt_sugar', value);
        },
        get(key) {
          return this.state[key];
        }
      };

      // -------------------------------------------------------------
      // 2. DOM Ready Orchestration
      // -------------------------------------------------------------
      document.addEventListener('DOMContentLoaded', () => {

        // Cache Critical DOM Elements
        const DOM = {
          header: document.getElementById('mainHeader'),
          navContainer: document.getElementById('navContainer'),
          calligraphyWrapper: document.getElementById('calligraphyWrapper'),
          calligraphyTitle: document.getElementById('calligraphyTitle'),
          mobileBtn: document.getElementById('mobileMenuBtn'),
          mobileMenu: document.getElementById('mobileMenu'),
          mobileNavLinks: document.querySelectorAll('.mobile-nav-link'),
          langToggle: document.getElementById('langToggle'),
          currentYear: document.getElementById('currentYear'),

          // Live Vibe
          refreshBtn: document.getElementById('refreshVibeBtn'),
          refreshIcon: document.getElementById('refreshIcon'),
          occSilent: document.getElementById('occ-silent'),
          occCafe: document.getElementById('occ-cafe'),
          topSummary: document.getElementById('topCapacitySummary'),
          zonesContainer: document.getElementById('zonesContainer'),

          // Drinks
          btnHotDrinks: document.getElementById('btnHotDrinks'),
          btnColdDrinks: document.getElementById('btnColdDrinks'),
          hotCards: document.querySelectorAll('.hot-drink'),
          coldCards: document.querySelectorAll('.cold-drink'),
          drinkCards: document.querySelectorAll('.drink-card'),
          drinkModal: document.getElementById('drinkModal'),
          closeDrinkModal: document.getElementById('closeDrinkModal'),
          modalDrinkTitle: document.getElementById('modalDrinkTitle'),
          modalDrinkCategoryTag: document.getElementById('modalDrinkCategoryTag'),
          modalDrinkDesc: document.getElementById('modalDrinkDesc'),
          modalDrinkIngredients: document.getElementById('modalDrinkIngredients'),
          sugarCustomizerBox: document.getElementById('sugarCustomizerBox'),
          sugarBtns: document.querySelectorAll('.sugar-btn'),
          selectedSugarNote: document.getElementById('selectedSugarNote'),
          orderDrinkNowBtn: document.getElementById('orderDrinkNowBtn'),
          orderSuccessAlert: document.getElementById('orderSuccessAlert'),

          // Calculator
          spaceBtns: document.querySelectorAll('.space-type-btn'),
          durationSlider: document.getElementById('durationSlider'),
          durationDisplay: document.getElementById('durationDisplay'),
          calcSelectedTitle: document.getElementById('calcSelectedTitle'),
          calcBasePrice: document.getElementById('calcBasePrice'),
          calcAddonsPrice: document.getElementById('calcAddonsPrice'),
          calcDiscount: document.getElementById('calcDiscount'),
          calcTotalPrice: document.getElementById('calcTotalPrice'),
          addonCoffee: document.getElementById('addonCoffee'),
          addonLocker: document.getElementById('addonLocker'),
          addonPrint: document.getElementById('addonPrint'),
          calcBookNowBtn: document.getElementById('calcBookNowBtn'),
          bookSpaceType: document.getElementById('bookSpaceType'),

          // Gallery & Lightbox
          galleryFilterBtns: document.querySelectorAll('.gallery-btn'),
          galleryItems: document.querySelectorAll('.gallery-item'),
          lightboxModal: document.getElementById('lightboxModal'),
          lightboxImg: document.getElementById('lightboxImg'),
          lightboxCaption: document.getElementById('lightboxCaption'),
          closeLightbox: document.getElementById('closeLightbox'),

          // Booking Form
          bookingForm: document.getElementById('bookingForm'),
          step1: document.getElementById('step1Content'),
          step2: document.getElementById('step2Content'),
          bookingResult: document.getElementById('bookingResult'),
          stepIndicator2: document.getElementById('stepIndicator2'),
          goToStep2Btn: document.getElementById('goToStep2Btn'),
          backToStep1Btn: document.getElementById('backToStep1Btn'),
          dateInput: document.getElementById('bookDate'),
          timeInput: document.getElementById('bookTime'),
          custName: document.getElementById('custName'),
          custPhone: document.getElementById('custPhone'),
          custNotes: document.getElementById('custNotes'),
          resRef: document.getElementById('resRef'),
          resName: document.getElementById('resName'),
          resSpace: document.getElementById('resSpace'),
          resDateTime: document.getElementById('resDateTime'),
          waSendLink: document.getElementById('waSendLink'),

          // FAQ
          faqTriggers: document.querySelectorAll('.faq-trigger'),

          // Header Couplet
          headerCouplet: document.getElementById('headerCoupletContainer'),
          coupletLine1: document.getElementById('coupletLine1'),
          coupletLine2: document.getElementById('coupletLine2'),

          // Center Quick Hub Buttons (في منتصف الصفحة)
          hubColdDrinksBtn: document.getElementById('hubColdDrinksBtn'),
          hubHotDrinksBtn: document.getElementById('hubHotDrinksBtn'),
          hubCalcBtn: document.getElementById('hubCalcBtn'),
          hubLiveVibeBtn: document.getElementById('hubLiveVibeBtn'),

          // Dedicated Cold & Hot Drinks Modals
          coldDrinksModal: document.getElementById('coldDrinksModal'),
          closeColdDrinksModal: document.getElementById('closeColdDrinksModal'),
          hotDrinksModal: document.getElementById('hotDrinksModal'),
          closeHotDrinksModal: document.getElementById('closeHotDrinksModal'),
          hotModalSugarBtns: document.querySelectorAll('.hot-modal-sugar-btn'),
          hotModalSugarNote: document.getElementById('hotModalSugarNote'),
          coldOrderAlert: document.getElementById('coldOrderAlert'),
          hotOrderAlert: document.getElementById('hotOrderAlert'),
          quickColdOrderBtns: document.querySelectorAll('.quick-cold-order-btn'),
          quickHotOrderBtns: document.querySelectorAll('.quick-hot-order-btn'),

          // Modals
          vibeModal: document.getElementById('vibeModal'),
          closeVibeModal: document.getElementById('closeVibeModal'),
          modalRefreshVibeBtn: document.getElementById('modalRefreshVibeBtn'),
          modalRefreshIcon: document.getElementById('modalRefreshIcon'),
          modalOccSilent: document.getElementById('modal-occ-silent'),
          modalOccCafe: document.getElementById('modal-occ-cafe'),
          modalBarSilent: document.getElementById('modal-bar-silent'),
          modalBarCafe: document.getElementById('modal-bar-cafe'),
          modalSeatsSilent: document.getElementById('modal-seats-silent'),
          modalSeatsCafe: document.getElementById('modal-seats-cafe'),
          modalVibeBookBtn: document.getElementById('modalVibeBookBtn'),

          calcModal: document.getElementById('calcModal'),
          closeCalcModal: document.getElementById('closeCalcModal'),
          modalSpaceBtns: document.querySelectorAll('.modal-space-btn'),
          modalDurationSlider: document.getElementById('modalDurationSlider'),
          modalDurationDisplay: document.getElementById('modalDurationDisplay'),
          modalSpaceTitle: document.getElementById('modalSpaceTitle'),
          modalDiscountDisplay: document.getElementById('modalDiscountDisplay'),
          modalTotalPrice: document.getElementById('modalTotalPrice'),
          modalBookNowBtn: document.getElementById('modalBookNowBtn'),

        };

        // -------------------------------------------------------------
        // 2.2 Header Couplet Dynamic Lyric Glow Engine (JavaScript)
        // -------------------------------------------------------------
        if (DOM.coupletLine1 && DOM.coupletLine2) {
          let lineToggle = false;
          setInterval(() => {
            lineToggle = !lineToggle;
            if (lineToggle) {
              DOM.coupletLine1.classList.add('text-amberAccent', 'scale-[1.02]');
              DOM.coupletLine1.classList.remove('text-amberAccent-dark');
              DOM.coupletLine2.classList.remove('text-amberAccent', 'scale-[1.02]');
              DOM.coupletLine2.classList.add('opacity-80');
            } else {
              DOM.coupletLine2.classList.add('text-amberAccent', 'scale-[1.02]');
              DOM.coupletLine2.classList.remove('opacity-80');
              DOM.coupletLine1.classList.remove('text-amberAccent', 'scale-[1.02]');
              DOM.coupletLine1.classList.add('text-amberAccent-dark');
            }
          }, 4000);
        }

        // -------------------------------------------------------------
        // 2.3 Center Quick Hub & Modals Controllers (Cold, Hot, Calc, Vibe)
        // -------------------------------------------------------------
        
        // Cold Drinks Modal Controller
        const openColdDrinksModal = () => {
          lastFocusedElement = document.activeElement;
          if (DOM.coldDrinksModal) {
            DOM.coldDrinksModal.classList.remove('hidden');
            DOM.coldDrinksModal.classList.add('flex');
            document.body.classList.add('modal-open');
            if (DOM.closeColdDrinksModal) DOM.closeColdDrinksModal.focus();
          }
        };
        const closeColdDrinksModal = () => {
          if (DOM.coldDrinksModal) {
            DOM.coldDrinksModal.classList.add('hidden');
            DOM.coldDrinksModal.classList.remove('flex');
            document.body.classList.remove('modal-open');
            if (lastFocusedElement) lastFocusedElement.focus();
          }
        };
        if (DOM.hubColdDrinksBtn) DOM.hubColdDrinksBtn.addEventListener('click', openColdDrinksModal);
        if (DOM.closeColdDrinksModal) DOM.closeColdDrinksModal.addEventListener('click', closeColdDrinksModal);
        if (DOM.coldDrinksModal) {
          DOM.coldDrinksModal.addEventListener('click', (e) => {
            if (e.target === DOM.coldDrinksModal) closeColdDrinksModal();
          });
        }
        if (DOM.quickColdOrderBtns) {
          DOM.quickColdOrderBtns.forEach(btn => {
            btn.addEventListener('click', () => {
              if (DOM.coldOrderAlert) {
                DOM.coldOrderAlert.classList.remove('hidden');
                setTimeout(() => DOM.coldOrderAlert.classList.add('hidden'), 4000);
              }
            });
          });
        }

        // Hot Drinks Modal Controller
        const openHotDrinksModal = () => {
          lastFocusedElement = document.activeElement;
          if (DOM.hotDrinksModal) {
            DOM.hotDrinksModal.classList.remove('hidden');
            DOM.hotDrinksModal.classList.add('flex');
            document.body.classList.add('modal-open');
            if (DOM.closeHotDrinksModal) DOM.closeHotDrinksModal.focus();
          }
        };
        const closeHotDrinksModal = () => {
          if (DOM.hotDrinksModal) {
            DOM.hotDrinksModal.classList.add('hidden');
            DOM.hotDrinksModal.classList.remove('flex');
            document.body.classList.remove('modal-open');
            if (lastFocusedElement) lastFocusedElement.focus();
          }
        };
        if (DOM.hubHotDrinksBtn) DOM.hubHotDrinksBtn.addEventListener('click', openHotDrinksModal);
        if (DOM.closeHotDrinksModal) DOM.closeHotDrinksModal.addEventListener('click', closeHotDrinksModal);
        if (DOM.hotDrinksModal) {
          DOM.hotDrinksModal.addEventListener('click', (e) => {
            if (e.target === DOM.hotDrinksModal) closeHotDrinksModal();
          });
        }
        if (DOM.hotModalSugarBtns) {
          DOM.hotModalSugarBtns.forEach(btn => {
            btn.addEventListener('click', () => {
              DOM.hotModalSugarBtns.forEach(b => {
                b.classList.remove('bg-sage-800', 'text-alabaster', 'border-sage-600', 'shadow-sm');
                b.classList.add('bg-white', 'text-slateText', 'border-sage-200');
              });
              btn.classList.add('bg-sage-800', 'text-alabaster', 'border-sage-600', 'shadow-sm');
              btn.classList.remove('bg-white', 'text-slateText', 'border-sage-200');
              const sugarVal = btn.dataset.sugar;
              if (DOM.hotModalSugarNote) DOM.hotModalSugarNote.textContent = `الخيار المعتمد: ${sugarVal}`;
            });
          });
        }
        if (DOM.quickHotOrderBtns) {
          DOM.quickHotOrderBtns.forEach(btn => {
            btn.addEventListener('click', () => {
              if (DOM.hotOrderAlert) {
                DOM.hotOrderAlert.classList.remove('hidden');
                setTimeout(() => DOM.hotOrderAlert.classList.add('hidden'), 4000);
              }
            });
          });
        }

        // Live Vibe Modal Controller
        const openVibeModal = () => {
          lastFocusedElement = document.activeElement;
          DOM.vibeModal.classList.remove('hidden');
          DOM.vibeModal.classList.add('flex');
          document.body.classList.add('modal-open');
          DOM.closeVibeModal.focus();
        };

        const closeVibeModal = () => {
          DOM.vibeModal.classList.add('hidden');
          DOM.vibeModal.classList.remove('flex');
          document.body.classList.remove('modal-open');
          if (lastFocusedElement) lastFocusedElement.focus();
        };

        if (DOM.hubLiveVibeBtn) DOM.hubLiveVibeBtn.addEventListener('click', openVibeModal);
        if (DOM.dockLiveVibeBtn) DOM.dockLiveVibeBtn.addEventListener('click', openVibeModal);
        if (DOM.closeVibeModal) DOM.closeVibeModal.addEventListener('click', closeVibeModal);
        if (DOM.vibeModal) {
          DOM.vibeModal.addEventListener('click', (e) => {
            if (e.target === DOM.vibeModal) closeVibeModal();
          });
        }
        if (DOM.modalVibeBookBtn) {
          DOM.modalVibeBookBtn.addEventListener('click', closeVibeModal);
        }

        if (DOM.modalRefreshVibeBtn) {
          DOM.modalRefreshVibeBtn.addEventListener('click', () => {
            if (DOM.modalRefreshIcon) {
              DOM.modalRefreshIcon.classList.add('inline-block', 'rotate-180', 'transition-transform', 'duration-500');
              setTimeout(() => DOM.modalRefreshIcon.classList.remove('rotate-180'), 500);
            }
            const sVal = Math.floor(Math.random() * (55 - 35 + 1)) + 35;
            const cVal = Math.floor(Math.random() * (78 - 60 + 1)) + 60;
            if (DOM.modalOccSilent) DOM.modalOccSilent.textContent = `${sVal}%`;
            if (DOM.modalOccCafe) DOM.modalOccCafe.textContent = `${cVal}%`;
            if (DOM.modalBarSilent) DOM.modalBarSilent.style.width = `${sVal}%`;
            if (DOM.modalBarCafe) DOM.modalBarCafe.style.width = `${cVal}%`;
            if (DOM.modalSeatsSilent) DOM.modalSeatsSilent.textContent = `${Math.round((1 - sVal / 100) * 20)} مكاتب`;
            if (DOM.modalSeatsCafe) DOM.modalSeatsCafe.textContent = `${Math.round((1 - cVal / 100) * 15)} طاولات`;
          });
        }

        // Calculator Modal Controller
        let modalRate = 45;
        let modalName = "مكتب مرن (Flex Desk)";

        const openCalcModal = () => {
          lastFocusedElement = document.activeElement;
          DOM.calcModal.classList.remove('hidden');
          DOM.calcModal.classList.add('flex');
          document.body.classList.add('modal-open');
          DOM.closeCalcModal.focus();
        };

        const closeCalcModal = () => {
          DOM.calcModal.classList.add('hidden');
          DOM.calcModal.classList.remove('flex');
          document.body.classList.remove('modal-open');
          if (lastFocusedElement) lastFocusedElement.focus();
        };

        if (DOM.hubCalcBtn) DOM.hubCalcBtn.addEventListener('click', openCalcModal);
        if (DOM.dockCalcBtn) DOM.dockCalcBtn.addEventListener('click', openCalcModal);
        if (DOM.closeCalcModal) DOM.closeCalcModal.addEventListener('click', closeCalcModal);
        if (DOM.calcModal) {
          DOM.calcModal.addEventListener('click', (e) => {
            if (e.target === DOM.calcModal) closeCalcModal();
          });
        }

        const recalcModalPrice = () => {
          if (!DOM.modalDurationSlider) return;
          const hours = parseInt(DOM.modalDurationSlider.value, 10);
          if (DOM.modalDurationDisplay) {
            DOM.modalDurationDisplay.textContent = hours === 1 ? 'ساعة واحدة' : `${hours} ساعات`;
          }
          const base = modalRate * hours;
          const disc = hours >= 4 ? Math.round(base * 0.10) : 0;
          if (DOM.modalDiscountDisplay) {
            DOM.modalDiscountDisplay.textContent = `-${disc} ج.م`;
          }
          const net = base - disc;
          if (DOM.modalTotalPrice) {
            DOM.modalTotalPrice.textContent = net.toString();
          }
        };

        if (DOM.modalSpaceBtns) {
          DOM.modalSpaceBtns.forEach(btn => {
            btn.addEventListener('click', () => {
              DOM.modalSpaceBtns.forEach(b => {
                b.classList.remove('bg-sage-800', 'text-alabaster', 'border-sage-600');
                b.classList.add('bg-white', 'text-slateText', 'border-sage-200');
              });
              btn.classList.add('bg-sage-800', 'text-alabaster', 'border-sage-600');
              btn.classList.remove('bg-white', 'text-slateText', 'border-sage-200');
              modalRate = parseInt(btn.dataset.rate, 10);
              modalName = btn.dataset.title;
              if (DOM.modalSpaceTitle) DOM.modalSpaceTitle.textContent = modalName;
              recalcModalPrice();
            });
          });
        }

        if (DOM.modalDurationSlider) {
          DOM.modalDurationSlider.addEventListener('input', recalcModalPrice);
        }

        if (DOM.modalBookNowBtn) {
          DOM.modalBookNowBtn.addEventListener('click', () => {
            closeCalcModal();
            if (DOM.bookSpaceType) {
              DOM.bookSpaceType.value = modalName.includes('اجتماعات')
                ? 'قاعة اجتماعات أم كلثوم (10 أفراد)'
                : 'مكتب مرن (Flex Desk)';
            }
            window.location.hash = '#booking';
          });
        }

        // -------------------------------------------------------------
        // 3. Dynamic Year Calculation (Temporal API safe)
        // -------------------------------------------------------------
        if (DOM.currentYear) {
          DOM.currentYear.textContent = new Date().getFullYear();
        }

        // -------------------------------------------------------------
        // 4. Ultra-Smooth Hardware-Accelerated Header Elevation
        // -------------------------------------------------------------
        const handleHeaderScroll = () => {
          const isElevated = window.scrollY > 30;
          DOM.header.classList.toggle('glass-nav', isElevated);
          DOM.header.classList.toggle('shadow-md', isElevated);
          DOM.header.classList.toggle('border-transparent', !isElevated);
          
          if (isElevated) {
            DOM.navContainer.classList.replace('h-20', 'h-16');
          } else {
            DOM.navContainer.classList.replace('h-16', 'h-20');
          }
        };
        window.addEventListener('scroll', handleHeaderScroll, { passive: true });
        handleHeaderScroll();

        // -------------------------------------------------------------
        // 5. Physics-Based Smooth Calligraphy Tilt Engine via RAF Loop
        // -------------------------------------------------------------
        if (DOM.calligraphyWrapper && DOM.calligraphyTitle) {
          let targetRotateX = 0;
          let targetRotateY = 0;
          let currentRotateX = 0;
          let currentRotateY = 0;
          let isHovered = false;
          let rafId = null;

          const lerp = (start, end, factor) => start + (end - start) * factor;

          const renderTiltPhysics = () => {
            currentRotateX = lerp(currentRotateX, targetRotateX, 0.12);
            currentRotateY = lerp(currentRotateY, targetRotateY, 0.12);

            DOM.calligraphyWrapper.style.transform = 
              `perspective(1000px) rotateX(${currentRotateX.toFixed(2)}deg) rotateY(${currentRotateY.toFixed(2)}deg)`;

            // Keep loop running while mouse is active or until settled
            if (isHovered || Math.abs(currentRotateX - targetRotateX) > 0.01 || Math.abs(currentRotateY - targetRotateY) > 0.01) {
              rafId = requestAnimationFrame(renderTiltPhysics);
            } else {
              rafId = null;
            }
          };

          window.addEventListener('mousemove', (e) => {
            if (window.innerWidth < 768) return; // Save mobile CPU

            const rect = DOM.calligraphyWrapper.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;

            const deltaX = (e.clientX - centerX) / (window.innerWidth / 2);
            const deltaY = (e.clientY - centerY) / (window.innerHeight / 2);

            targetRotateX = -deltaY * 8;
            targetRotateY = deltaX * 8;
            isHovered = true;

            if (!rafId) {
              rafId = requestAnimationFrame(renderTiltPhysics);
            }
          }, { passive: true });

          DOM.calligraphyWrapper.addEventListener('mouseleave', () => {
            targetRotateX = 0;
            targetRotateY = 0;
            isHovered = false;
          });

          DOM.calligraphyTitle.addEventListener('click', () => {
            DOM.calligraphyTitle.style.transform = 'scale(1.06)';
            setTimeout(() => {
              DOM.calligraphyTitle.style.transform = 'scale(1)';
            }, 300);
          });
        }

        // -------------------------------------------------------------
        // 6. Mobile Navigation with ARIA State
        // -------------------------------------------------------------
        if (DOM.mobileBtn && DOM.mobileMenu) {
          DOM.mobileBtn.addEventListener('click', () => {
            const isHidden = DOM.mobileMenu.classList.toggle('hidden');
            DOM.mobileBtn.setAttribute('aria-expanded', (!isHidden).toString());
          });

          DOM.mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
              DOM.mobileMenu.classList.add('hidden');
              DOM.mobileBtn.setAttribute('aria-expanded', 'false');
            });
          });
        }

        // -------------------------------------------------------------
        // 7. Live Vibe Refresher Simulation
        // -------------------------------------------------------------
        const updateVibeData = () => {
          DOM.refreshIcon.classList.add('rotate-180', 'transition-transform', 'duration-500');
          setTimeout(() => DOM.refreshIcon.classList.remove('rotate-180'), 500);

          const silentVal = Math.floor(Math.random() * (55 - 35 + 1)) + 35;
          const cafeVal = Math.floor(Math.random() * (78 - 60 + 1)) + 60;
          
          if (DOM.occSilent) DOM.occSilent.textContent = `${silentVal}%`;
          if (DOM.occCafe) DOM.occCafe.textContent = `${cafeVal}%`;

          const silentProgressBar = DOM.occSilent?.closest('.space-y-3')?.querySelector('.bg-emerald-500');
          if (silentProgressBar) silentProgressBar.style.width = `${silentVal}%`;

          const cafeProgressBar = DOM.occCafe?.closest('.space-y-3')?.querySelector('.bg-amberAccent');
          if (cafeProgressBar) cafeProgressBar.style.width = `${cafeVal}%`;

          const freeSilentSeats = Math.round((1 - silentVal / 100) * 20);
          if (DOM.topSummary) {
            DOM.topSummary.textContent = `متاح ${freeSilentSeats} مقعداً هادئاً الآن • أجواء رايقة وهدوء تام`;
          }
        };

        if (DOM.refreshBtn) {
          DOM.refreshBtn.addEventListener('click', updateVibeData);
        }

        // -------------------------------------------------------------
        // 8. Drinks Menu Category Filter
        // -------------------------------------------------------------
        DOM.btnHotDrinks.addEventListener('click', () => {
          DOM.btnHotDrinks.className = "px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-sage-800 text-alabaster shadow-md transition-all flex items-center gap-2";
          DOM.btnColdDrinks.className = "px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white text-slateText border border-sage-200 hover:bg-sage-50 transition-all flex items-center gap-2";
          DOM.btnHotDrinks.setAttribute('aria-selected', 'true');
          DOM.btnColdDrinks.setAttribute('aria-selected', 'false');
          
          DOM.hotCards.forEach(c => c.classList.remove('hidden'));
          DOM.coldCards.forEach(c => c.classList.add('hidden'));
        });

        DOM.btnColdDrinks.addEventListener('click', () => {
          DOM.btnColdDrinks.className = "px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-sage-800 text-alabaster shadow-md transition-all flex items-center gap-2";
          DOM.btnHotDrinks.className = "px-6 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white text-slateText border border-sage-200 hover:bg-sage-50 transition-all flex items-center gap-2";
          DOM.btnColdDrinks.setAttribute('aria-selected', 'true');
          DOM.btnHotDrinks.setAttribute('aria-selected', 'false');
          
          DOM.coldCards.forEach(c => c.classList.remove('hidden'));
          DOM.hotCards.forEach(c => c.classList.add('hidden'));
        });

        // -------------------------------------------------------------
        // 9. Drink Detail & Sugar Customizer Modal (Focus Trapping & A11y)
        // -------------------------------------------------------------
        let lastFocusedElement = null;

        const openDrinkModal = (card) => {
          lastFocusedElement = document.activeElement;
          const { name, type, desc, ingredients } = card.dataset;

          DOM.modalDrinkTitle.textContent = name;
          DOM.modalDrinkDesc.textContent = desc;
          DOM.modalDrinkIngredients.textContent = ingredients;

          if (type === 'hot') {
            DOM.modalDrinkCategoryTag.textContent = 'مشروب ساخن أو قهوة ☕';
            DOM.modalDrinkCategoryTag.className = 'text-xs px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-semibold';
            DOM.sugarCustomizerBox.classList.remove('hidden');
          } else {
            DOM.modalDrinkCategoryTag.textContent = 'مشروب مثلج ومنعش ❄️';
            DOM.modalDrinkCategoryTag.className = 'text-xs px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-semibold';
            DOM.sugarCustomizerBox.classList.add('hidden');
          }

          DOM.orderSuccessAlert.classList.add('hidden');
          DOM.drinkModal.classList.remove('hidden');
          DOM.drinkModal.classList.add('flex');
          document.body.classList.add('modal-open');
          DOM.closeDrinkModal.focus();
        };

        const closeDrinkModal = () => {
          DOM.drinkModal.classList.add('hidden');
          DOM.drinkModal.classList.remove('flex');
          document.body.classList.remove('modal-open');
          if (lastFocusedElement) lastFocusedElement.focus();
        };

        DOM.sugarBtns.forEach(btn => {
          btn.addEventListener('click', () => {
            DOM.sugarBtns.forEach(b => {
              b.classList.remove('bg-sage-800', 'text-alabaster', 'border-sage-600', 'shadow-sm');
              b.classList.add('bg-white', 'text-slateText', 'border-sage-200');
              b.setAttribute('aria-checked', 'false');
            });
            btn.classList.add('bg-sage-800', 'text-alabaster', 'border-sage-600', 'shadow-sm');
            btn.classList.remove('bg-white', 'text-slateText', 'border-sage-200');
            btn.setAttribute('aria-checked', 'true');

            ElSittStore.set('selectedSugar', btn.dataset.sugar);
            DOM.selectedSugarNote.textContent = `الخيار الحالي: ${btn.dataset.sugar}`;
          });
        });

        DOM.drinkCards.forEach(card => {
          card.addEventListener('click', () => openDrinkModal(card));
          card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              openDrinkModal(card);
            }
          });
        });

        DOM.closeDrinkModal.addEventListener('click', closeDrinkModal);
        DOM.drinkModal.addEventListener('click', (e) => {
          if (e.target === DOM.drinkModal) closeDrinkModal();
        });

        DOM.orderDrinkNowBtn.addEventListener('click', () => {
          DOM.orderSuccessAlert.classList.remove('hidden');
          setTimeout(() => closeDrinkModal(), 2000);
        });

        // -------------------------------------------------------------
        // 10. High-Performance Interactive Price Calculator
        // -------------------------------------------------------------
        DOM.spaceBtns.forEach(btn => {
          btn.addEventListener('click', () => {
            DOM.spaceBtns.forEach(b => {
              b.classList.remove('bg-sage-800', 'text-alabaster', 'border-sage-600');
              b.classList.add('bg-white', 'text-slateText', 'border-sage-200');
            });
            btn.classList.add('bg-sage-800', 'text-alabaster', 'border-sage-600');
            btn.classList.remove('bg-white', 'text-slateText', 'border-sage-200');

            ElSittStore.set('hourlyRate', parseInt(btn.dataset.rate, 10));
            ElSittStore.set('spaceName', btn.dataset.title);
            DOM.calcSelectedTitle.textContent = btn.dataset.title;
            recalculatePrice();
          });
        });

        function recalculatePrice() {
          const hours = parseInt(DOM.durationSlider.value, 10);
          DOM.durationSlider.setAttribute('aria-valuenow', hours.toString());
          DOM.durationDisplay.textContent = hours === 1 ? 'ساعة واحدة' : `${hours} ساعات`;

          const rate = ElSittStore.get('hourlyRate');
          const base = rate * hours;
          DOM.calcBasePrice.textContent = `${base} ج.م`;

          let addons = 0;
          if (DOM.addonCoffee.checked) addons += 60;
          if (DOM.addonLocker.checked) addons += 30;
          if (DOM.addonPrint.checked) addons += 40;
          DOM.calcAddonsPrice.textContent = `${addons} ج.م`;

          const discount = hours >= 4 ? Math.round(base * 0.10) : 0;
          DOM.calcDiscount.textContent = `-${discount} ج.م`;

          const total = (base - discount) + addons;
          DOM.calcTotalPrice.textContent = total.toString();
        }

        DOM.durationSlider.addEventListener('input', recalculatePrice);
        DOM.addonCoffee.addEventListener('change', recalculatePrice);
        DOM.addonLocker.addEventListener('change', recalculatePrice);
        DOM.addonPrint.addEventListener('change', recalculatePrice);
        recalculatePrice();

        DOM.calcBookNowBtn.addEventListener('click', () => {
          const name = ElSittStore.get('spaceName');
          DOM.bookSpaceType.value = name.includes('اجتماعات') 
            ? 'قاعة اجتماعات أم كلثوم (10 أفراد)' 
            : 'مكتب مرن (Flex Desk)';
          window.location.hash = '#booking';
        });

        // -------------------------------------------------------------
        // 11. Gallery Filter and Lightbox Modal
        // -------------------------------------------------------------
        DOM.galleryFilterBtns.forEach(btn => {
          btn.addEventListener('click', () => {
            DOM.galleryFilterBtns.forEach(b => {
              b.classList.remove('bg-sage-800', 'text-alabaster');
              b.classList.add('bg-white', 'text-slateText');
              b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('bg-sage-800', 'text-alabaster');
            btn.classList.remove('bg-white', 'text-slateText');
            btn.setAttribute('aria-selected', 'true');

            const category = btn.dataset.filter;
            DOM.galleryItems.forEach(item => {
              if (category === 'all' || item.classList.contains(category)) {
                item.style.display = 'block';
              } else {
                item.style.display = 'none';
              }
            });
          });
        });

        const openLightbox = (item) => {
          lastFocusedElement = document.activeElement;
          DOM.lightboxImg.src = item.dataset.src;
          DOM.lightboxCaption.textContent = item.dataset.caption;
          DOM.lightboxModal.classList.remove('hidden');
          DOM.lightboxModal.classList.add('flex');
          document.body.classList.add('modal-open');
          DOM.closeLightbox.focus();
        };

        const closeLightbox = () => {
          DOM.lightboxModal.classList.add('hidden');
          DOM.lightboxModal.classList.remove('flex');
          document.body.classList.remove('modal-open');
          if (lastFocusedElement) lastFocusedElement.focus();
        };

        DOM.galleryItems.forEach(item => {
          item.addEventListener('click', () => openLightbox(item));
          item.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              openLightbox(item);
            }
          });
        });

        DOM.closeLightbox.addEventListener('click', closeLightbox);
        DOM.lightboxModal.addEventListener('click', (e) => {
          if (e.target === DOM.lightboxModal) closeLightbox();
        });

        // Global Escape Key Listener for Accessible Dialogs
        window.addEventListener('keydown', (e) => {
          if (e.key === 'Escape') {
            if (DOM.drinkModal && !DOM.drinkModal.classList.contains('hidden')) closeDrinkModal();
            if (DOM.lightboxModal && !DOM.lightboxModal.classList.contains('hidden')) closeLightbox();
            if (DOM.vibeModal && !DOM.vibeModal.classList.contains('hidden')) closeVibeModal();
            if (DOM.calcModal && !DOM.calcModal.classList.contains('hidden')) closeCalcModal();
            if (DOM.coldDrinksModal && !DOM.coldDrinksModal.classList.contains('hidden')) closeColdDrinksModal();
            if (DOM.hotDrinksModal && !DOM.hotDrinksModal.classList.contains('hidden')) closeHotDrinksModal();
          }
        });

        // -------------------------------------------------------------
        // 12. Step-by-Step Booking Form Navigation & Validation
        // -------------------------------------------------------------
        const today = new Date().toISOString().split('T')[0];
        DOM.dateInput.value = today;
        DOM.dateInput.min = today;

        DOM.goToStep2Btn.addEventListener('click', () => {
          DOM.step1.classList.add('hidden');
          DOM.step2.classList.remove('hidden');

          const badge = DOM.stepIndicator2.querySelector('span');
          badge.classList.replace('bg-sage-100', 'bg-sage-800');
          badge.classList.replace('text-slateText', 'text-alabaster');
          DOM.custName.focus();
        });

        DOM.backToStep1Btn.addEventListener('click', () => {
          DOM.step2.classList.add('hidden');
          DOM.step1.classList.remove('hidden');

          const badge = DOM.stepIndicator2.querySelector('span');
          badge.classList.replace('bg-sage-800', 'bg-sage-100');
          badge.classList.replace('text-alabaster', 'text-slateText');
        });

        DOM.bookingForm.addEventListener('submit', (e) => {
          e.preventDefault();
          const name = DOM.custName.value.trim();
          const space = DOM.bookSpaceType.value;
          const date = DOM.dateInput.value;
          const time = DOM.timeInput.value;
          const phoneVal = DOM.custPhone.value.trim();

          if (!name) {
            DOM.custName.focus();
            alert('اكتب اسمك الكامل عشان نكمل الحجز');
            return;
          }

          if (!/^01[0-25]\d{8}$/.test(phoneVal)) {
            DOM.custPhone.focus();
            alert('اكتب رقم موبايل صحيح (مثال: 01XXXXXXXXX)');
            return;
          }

          const refNumber = 'ST-' + Math.floor(1000 + Math.random() * 9000);
          DOM.resRef.textContent = refNumber;
          DOM.resName.textContent = name;
          DOM.resSpace.textContent = space;
          DOM.resDateTime.textContent = `${date} الساعة ${time}`;

          const notes = DOM.custNotes.value.trim();
          const msg = `🔔 حجز جديد - الست\n` +
            `رقم الحجز: ${refNumber}\n` +
            `الاسم: ${name}\n` +
            `الهاتف: ${phoneVal}\n` +
            `المساحة: ${space}\n` +
            `الموعد: ${date} الساعة ${time}` +
            (notes ? `\nملاحظات: ${notes}` : '');

          DOM.waSendLink.href = 'https://wa.me/201010379368?text=' + encodeURIComponent(msg);

          DOM.bookingForm.classList.add('hidden');
          DOM.bookingResult.classList.remove('hidden');
          DOM.bookingResult.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });

        // -------------------------------------------------------------
        // 13. Smart FAQ Accordion Interaction with ARIA
        // -------------------------------------------------------------
        DOM.faqTriggers.forEach(btn => {
          btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('.faq-icon');
            const isClosed = content.classList.contains('hidden');

            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.textContent = '＋');
            document.querySelectorAll('.faq-trigger').forEach(t => t.setAttribute('aria-expanded', 'false'));

            if (isClosed) {
              content.classList.remove('hidden');
              icon.textContent = '－';
              btn.setAttribute('aria-expanded', 'true');
            }
          });
        });

        // -------------------------------------------------------------
        // 14. Advanced Virtual TreeWalker I18n Engine & Persistence
        // -------------------------------------------------------------
        const EN_TEXT = {
          [`الحالة الفورية للمقر:`]: `Live status:`,
          [`متاح مقاعد هادئة الآن • أجواء رايقة وهدوء تام`]: `Quiet seats available now • Calm, peaceful atmosphere`,
          [`⏰ المواعيد: ٨:٠٠ ص – ١٢:٠٠ منتصف الليل`]: `⏰ Hours: 8:00 AM – 12:00 AM`,
          [`📶 إنترنت فائق القوة ومستقر بدون انقطاع`]: `📶 Ultra-fast, stable internet with no interruptions`,
          [`النبض المباشر`]: `Live Pulse`,
          [`مشروبات الست`]: `El Sitt Drinks`,
          [`حاسبة الباقات`]: `Pricing Calculator`,
          [`مميزات المكان`]: `Amenities`,
          [`معرض الأجواء`]: `Gallery`,
          [`الأسئلة الشائعة`]: `FAQ`,
          [`احجز مقعدك الآن`]: `Book Your Seat`,
          [`النبض المباشر والسعة`]: `Live Pulse & Capacity`,
          [`مشروبات وقهوة الست`]: `El Sitt Drinks & Coffee`,
          [`حاسبة الباقات والأسعار`]: `Pricing Calculator`,
          [`مميزات وتجهيزات المكان`]: `Amenities & Facilities`,
          [`معرض الأجواء الحقيقية`]: `Real Ambience Gallery`,
          [`دليل الأسئلة الشائعة`]: `FAQ`,
          [`حجز مباشر`]: `Book Now`,
          [`✤ مَسَاحَةُ العَمَلِ المُشتَرَكَة ✤`]: `✤ Shared Workspace ✤`,
          [`سلطنة وهدوء وإنجاز بلا انقطاع`]: `Elegance, calm and uninterrupted achievement`,
          [`مساحة عمل تمنحك صفاء الذهن وأعلى مستويات الإنتاجية`]: `A workspace that gives you clarity of mind and peak productivity`,
          [`صُممت "الست" لتكون واحتك الهادئة للعمل والابتكار، حيث تجتمع وسائل الراحة الطبية مع خدمة إنترنت فائقة القوة وقهوة مختصة ومشروبات أصيلة محضرة بعناية.`]: `El Sitt is designed to be your calm oasis for work and innovation, combining comfort, ultra-fast internet, specialty coffee and carefully prepared authentic drinks.`,
          [`إنترنت فائق القوة`]: `Ultra-fast Internet`,
          [`اتصال ثابت مستقر دائماً`]: `Always a stable connection`,
          [`أجواء هدوء وتركيز`]: `Calm & Focus`,
          [`بيئة عمل صامتة ومريحة`]: `A quiet, comfortable work environment`,
          [`مشروبات وقهوة الست`]: `El Sitt Drinks & Coffee`,
          [`تخصصات ساخنة ومثلجة`]: `Hot & iced specialties`,
          [`احجز مكانك اليوم`]: `Book your spot today`,
          [`عرض الأماكن الشاغرة الآن`]: `View available spaces now`,
          [`تحديث مباشر ومستمر`]: `Live & continuously updated`,
          [`مؤشر النبض والهدوء الحي (Live Vibe)`]: `Live Calm & Pulse Indicator`,
          [`تعرف على حالة السعة وتوفر المقاعد والأجواء بكل ركن في "الست" قبل قدومك دون الحاجة للسؤال.`]: `Check capacity, seat availability and the atmosphere in every corner of El Sitt before you arrive.`,
          [`ملاذ التركيز الصامت`]: `Silent Focus Zone`,
          [`متاح شاغر`]: `Available`,
          [`نسبة الإشغال`]: `Occupancy`,
          [`حالة الأجواء:`]: `Atmosphere:`,
          [`هدوء وتركيز تام`]: `Complete calm & focus`,
          [`الشاغر الحالي:`]: `Currently free:`,
          [`7 مكاتب متاحة فوراً`]: `7 desks available now`,
          [`لاونج العمل والكافيه`]: `Work Lounge & Café`,
          [`حركة معتدلة`]: `Moderate traffic`,
          [`سرعة واستقرار النت:`]: `Internet speed & stability:`,
          [`إنترنت فائق القوة ومستقر`]: `Ultra-fast, stable internet`,
          [`6 طاولات شاغرة`]: `6 tables free`,
          [`كبائن المكالمات (Phone Pods)`]: `Phone Pods`,
          [`2 شاغرة`]: `2 free`,
          [`العزل الصوتي:`]: `Soundproofing:`,
          [`خصوصية تامة لاجتماعاتك`]: `Complete privacy for your calls`,
          [`كبينتان متوفرتان الآن`]: `Two pods available now`,
          [`قاعة اجتماعات "أم كلثوم"`]: `"Umm Kulthum" Meeting Room`,
          [`متاحة للحجز`]: `Available to book`,
          [`جاهزية القاعة`]: `Room readiness`,
          [`جاهزة بالكامل`]: `Fully ready`,
          [`خدمة العرض:`]: `Presentation:`,
          [`شاشة تفاعلية واجتماعات ذكية`]: `Interactive screen & smart meetings`,
          [`السعة:`]: `Capacity:`,
          [`تتسع حتى 10 أفراد بأريحية`]: `Comfortably fits up to 10 people`,
          [`تحديث حالة الإشغال المباشر`]: `Refresh live occupancy`,
          [`باريستا الست والمشروبات الأصلية`]: `El Sitt Barista & Authentic Drinks`,
          [`قائمة المشروبات والقهوة المختصة`]: `Drinks & Specialty Coffee Menu`,
          [`اضغط على أي مشروب ساخن أو قهوة لتخصيص كمية السكر واختيار المكونات حسب مزاجك.`]: `Tap any hot drink or coffee to customize the sugar level and choose ingredients to your taste.`,
          [`المشروبات المثلجة والمنعشة`]: `Iced & Refreshing Drinks`,
          [`المشروبات الساخنة والقهوة`]: `Hot Drinks & Coffee`,
          [`مشروب ساخن ☕`]: `Hot drink ☕`,
          [`مشروب مثلج ❄️`]: `Iced drink ❄️`,
          [`اضغط لتخصيص السكر`]: `Tap to customize sugar`,
          [`عرض المكونات`]: `View ingredients`,
          [`اضغط لعرض التفاصيل`]: `Tap for details`,
          [`اختر: سادة / مظبوط / زيادة`]: `Choose: Plain / Standard / Extra`,
          [`قهوة تركي على الرملة`]: `Turkish Coffee on Sand`,
          [`محضرة ببطء على الرمال الساخنة برغوة غنية تضبط مزاجك طوال اليوم.`]: `Slow-brewed on hot sand with a rich foam to lift your mood all day.`,
          [`شاي بلدي مخدوم بالنعناع`]: `Homemade Mint Tea`,
          [`شاي أصيل منعش يعيد لك الحيوية والنشاط أثناء إنجاز مهامك.`]: `A refreshing traditional tea that restores your energy while you work.`,
          [`فلات وايت (Flat White)`]: `Flat White`,
          [`قهوة قوية بلمسة حليبية ناعمة لعشاق المذاق الصريح المركز.`]: `Strong coffee with a soft milky touch, for lovers of bold flavor.`,
          [`شاي حليب أو كرك دافئ`]: `Warm Milk Tea (Karak)`,
          [`مشروب شتوي وصيفي دافئ وغني بالنكهات العطرية الهادئة.`]: `A warm, all-season drink rich in gentle aromatic flavors.`,
          [`هوت شوكلت بلجيكي فاخر`]: `Premium Belgian Hot Chocolate`,
          [`مشروب الطاقة والمزاج الرايق للتركيز الطويل.`]: `An energy and mood booster for long focus.`,
          [`أعشاب سيناء الهادئة`]: `Calming Sinai Herbs`,
          [`ضيافة طبيعية لتهدئة الذهن وتنقية الأعصاب أثناء العمل الصامت.`]: `A natural treat to calm the mind and soothe nerves during quiet work.`,
          [`آيس سبانش لاتيه`]: `Iced Spanish Latte`,
          [`المشروب الأكثر طلباً لإنعاش حواسك ومنحك طاقة فورية.`]: `Our most-ordered drink, to refresh you and give instant energy.`,
          [`كركديه أسواني بالنعناع`]: `Aswan Hibiscus with Mint`,
          [`مشروب مصري طبيعي 100% يروي العطش ويعدل المزاج.`]: `100% natural Egyptian drink that quenches thirst and lifts your mood.`,
          [`آيس ماتشا لاتيه`]: `Iced Matcha Latte`,
          [`طاقة ذهنية هادئة ومستدامة بدون توتر الكافيين العالي.`]: `Calm, sustained mental energy without high-caffeine jitters.`,
          [`رجوع`]: `Back`,
          [`المكونات الأساسية:`]: `Main ingredients:`,
          [`اختر كمية ومستوى السكر (تفضيل الرواد):`]: `Choose sugar level (guest preference):`,
          [`سادة 🛑`]: `Plain 🛑`,
          [`مظبوط ⚖️`]: `Standard ⚖️`,
          [`زيادة 🍯`]: `Extra 🍯`,
          [`تأكيد الطلب وإرساله لطاولة العمل`]: `Confirm order and send to your table`,
          [`✓ تم تسجيل طلبك بنجاح! سيصلك خلال دقائق إلى مقعدك.`]: `✓ Your order is confirmed! It will reach your seat within minutes.`,
          [`بدون عقود معقدة أو رسوم مخفية`]: `No complicated contracts or hidden fees`,
          [`حاسبة الباقات المرنة والمخصصة`]: `Flexible Pricing Calculator`,
          [`حدد احتياجك بدقة لتشاهد التكلفة الفورية، مع كافة المزايا المشمولة مجاناً.`]: `Set your needs to see the instant cost, with all included perks free.`,
          [`نوع المساحة المطلوبة:`]: `Space type:`,
          [`مكتب مرن`]: `Flex Desk`,
          [`مكتب مخصص`]: `Dedicated Desk`,
          [`قاعة اجتماعات`]: `Meeting Room`,
          [`المدة الزمنية:`]: `Duration:`,
          [`ساعة واحدة`]: `1 hour`,
          [`نصف يوم (5 س)`]: `Half day (5h)`,
          [`يوم كامل (12 س)`]: `Full day (12h)`,
          [`إضافات وتسهيلات اختيارية:`]: `Optional add-ons:`,
          [`باقة القهوة والمشروبات الساخنة المفتوحة`]: `Open coffee & hot drinks package`,
          [`خزانة أمانات رقمية خاصة طوال اليوم`]: `Private digital locker all day`,
          [`باقة طباعة مستندات ليزر ملونة (حتى 30 صفحة)`]: `Color laser printing package (up to 30 pages)`,
          [`ملخص التقدير الفوري`]: `Instant estimate summary`,
          [`مكتب مشترك (Flex Desk)`]: `Shared Desk (Flex Desk)`,
          [`سعر الساعات الأساسية:`]: `Base hourly price:`,
          [`الإضافات المحددة:`]: `Selected add-ons:`,
          [`خصم البقاء الطويل (+4 ساعات):`]: `Long-stay discount (4+ hours):`,
          [`إنترنت فائق القوة ومستقر غير محدود مجاناً`]: `Unlimited ultra-fast, stable internet, free`,
          [`مياه نقية ومشروبات عشبية ساخنة ضيافة`]: `Complimentary pure water & herbal hot drinks`,
          [`مواقف سيارات آمنة مجانية`]: `Free secure parking`,
          [`المجموع الصافي:`]: `Net total:`,
          [`ج.م فقط`]: `EGP only`,
          [`حجز هذه الباقة مباشرة`]: `Book this package now`,
          [`كل ما يضمن راحة يومك`]: `Everything for your comfort`,
          [`دليل مميزات وتجهيزات المكان`]: `Our Space Features & Facilities`,
          [`صممنا كل ركن وتفصيلة لتوفر لك أعلى مستويات التركيز والإنتاجية دون عناء.`]: `Every corner is designed to give you top focus and productivity with zero hassle.`,
          [`إنترنت فائق القوة والموثوقية`]: `Ultra-fast & Reliable Internet`,
          [`شبكة إنترنت مزدوجة ومجهزة بأحدث تقنيات Wi-Fi المتقدمة لتضمن استقراراً تاماً وسرعة فائقة بدون أي انقطاع أو تباطؤ أثناء اجتماعاتك وأعمالك.`]: `A dual internet network with the latest Wi-Fi technology, guaranteeing full stability and top speed with no interruptions or slowdowns during your meetings and work.`,
          [`اتصال مباشر ومستمر 24/7`]: `Continuous connection 24/7`,
          [`تغطية قوية في جميع المكاتب والقاعات بدون أي مناطق ميتة.`]: `Strong coverage across all desks and rooms, with no dead zones.`,
          [`مقابس وشواحن عند كل مقعد`]: `Outlets & chargers at every seat`,
          [`لن تبحث عن مقبس كهرباء أبداً. كل مكتب مجهز بمقابس كهربائية وشواحن USB و Type-C سريعة لشحن أجهزتك ومحمولك مباشرة وبأمان.`]: `You will never have to hunt for a plug. Every desk has power outlets and fast USB and Type-C chargers.`,
          [`🛡️ مولد كهربائي احتياطي يضمن استمرار الطاقة فوراً`]: `🛡️ Backup generator ensures instant power continuity`,
          [`كراسي ومكاتب طبية مريحة`]: `Ergonomic chairs & desks`,
          [`كراسي Ergonomic مريحة تدعم الظهر ومكاتب بارتفاعات مدروسة لتجلس ساعات طويلة بكامل طاقتك ودون أي إجهاد بدني.`]: `Ergonomic chairs that support your back and well-designed desk heights, so you can sit for hours at full energy without strain.`,
          [`✨ إضاءة طبيعية دافئة ومدروسة لراحة العين`]: `✨ Warm, thoughtful natural lighting for eye comfort`,
          [`ركن قهوة مختصة ومشروبات أصيلة`]: `Specialty coffee corner & authentic drinks`,
          [`محاصيل بن طازجة ومشروبات دافئة وباردة تُحضر بحرفية لتمنحك جرعة التركيز التي تحتاجها، مع خيارات ضيافة مجانية من المشروبات العشبية.`]: `Fresh coffee beans and hot and cold drinks, crafted with skill to give you the focus boost you need, plus free herbal hospitality options.`,
          [`🌱 مياه نقية مبردة متوفرة طوال الوقت مجاناً`]: `🌱 Free chilled pure water, available all the time`,
          [`أجواء هدوء وتركيز تام`]: `Complete calm & focus`,
          [`مناطق مخصصة بالكامل للعمل الهادئ والصامت، مع كبائن مكالمات معزولة بالكامل لإجراء اتصالاتك واجتماعاتك بحرية ودون إزعاج الآخرين.`]: `Zones dedicated entirely to quiet work, with fully soundproofed phone pods for calls and meetings without disturbing others.`,
          [`🕊️ بيئة محترمة تضمن أقصى درجات السكينة الذهنية`]: `🕊️ A respectful environment that ensures maximum peace of mind`,
          [`مواقف سيارات وسهولة وصول`]: `Parking & easy access`,
          [`ساحة انتظار واسعة أمام المقر مباشرة، بالإضافة لأمن وحراسة على مدار الساعة ومصعد كهربائي متاح.`]: `A large parking area right in front of the venue, plus 24/7 security and an available elevator.`,
          [`📍 موقع هادئ وسهل الوصول بعيداً عن الاختناقات`]: `📍 A quiet location, easy to reach and away from congestion`,
          [`أجواء حقيقية 100%`]: `100% Real Ambience`,
          [`معرض زوايا "الست"`]: `El Sitt Corners Gallery`,
          [`استكشف البيئة التي ستقضي فيها ساعاتك الأكثر إثماراً.`]: `Explore the space where you will spend your most productive hours.`,
          [`الكل`]: `All`,
          [`المكاتب الفردية`]: `Private Desks`,
          [`قاعات الاجتماعات`]: `Meeting Rooms`,
          [`الكافيه واللاونج`]: `Café & Lounge`,
          [`منطقة العمل الصامتة والمقاعد المريحة`]: `Silent work area & comfy seats`,
          [`قاعة الاجتماعات الرئيسية مجهزة بشاشات ذكية`]: `Main meeting room with smart screens`,
          [`ركن القهوة المختصة وجلسات الاستراحة`]: `Specialty coffee corner & lounge seating`,
          [`مكاتب خاصة فردية مع إنارة طبيعية`]: `Private desks with natural light`,
          [`اللاونج المفتوح لتبادل الأفكار`]: `Open lounge for exchanging ideas`,
          [`كبائن المكالمات الفردية العازلة للصوت`]: `Soundproof individual phone pods`,
          [`تأكيد حجزك في أقل من دقيقة`]: `Confirm your booking in under a minute`,
          [`احجز مكانك في "الست"`]: `Book your spot at El Sitt`,
          [`لا يتطلب الحجز بطاقة ائتمانية فورية، ادفع عند وصولك واستمتع بيومك.`]: `No credit card needed now. Pay when you arrive and enjoy your day.`,
          [`المساحة والوقت`]: `Space & Time`,
          [`البيانات والتأكيد`]: `Details & Confirmation`,
          [`اختر التاريخ:`]: `Select date:`,
          [`وقت الوصول المتوقع:`]: `Expected arrival time:`,
          [`نوع الحجز والمقعد:`]: `Booking & seat type:`,
          [`مكتب مرن مشترك (Flex Desk)`]: `Shared Flex Desk`,
          [`مكتب مخصص هادئ (Dedicated Desk)`]: `Quiet Dedicated Desk`,
          [`غرفة اجتماعات صغيرة (4 أفراد)`]: `Small meeting room (4 people)`,
          [`قاعة اجتماعات كبرى (10 أفراد)`]: `Large meeting hall (10 people)`,
          [`09:00 صباحاً`]: `9:00 AM`,
          [`11:00 صباحاً`]: `11:00 AM`,
          [`01:00 ظهراً`]: `1:00 PM`,
          [`04:00 عصراً`]: `4:00 PM`,
          [`06:00 مساءً`]: `6:00 PM`,
          [`المتابعة للخطوة التالية ←`]: `Continue to next step`,
          [`الاسم الكامل:`]: `Full name:`,
          [`رقم الهاتف / واتساب:`]: `Phone / WhatsApp:`,
          [`ملاحظات خاصة أو طلب تجهيزات معينة:`]: `Special notes or equipment requests:`,
          [`→ العودة لتعديل الموعد`]: `← Back to edit schedule`,
          [`تأكيد الحجز الفوري`]: `Confirm booking now`,
          [`تم تأكيد حجزك بنجاح! ننتظرك في الست`]: `Booking confirmed! We are waiting for you at El Sitt`,
          [`احتفظ ببيانات بطاقة الدخول الرقمية هذه:`]: `Keep this digital entry pass:`,
          [`رقم الحجز المرجعي:`]: `Booking reference:`,
          [`اسم الرواد:`]: `Guest name:`,
          [`المساحة:`]: `Space:`,
          [`الموعد المحدد:`]: `Scheduled time:`,
          [`حالة الدفع:`]: `Payment status:`,
          [`عند الوصول بالمقر (نقداً / بطاقة)`]: `On arrival (cash / card)`,
          [`طباعة أو حفظ التذكرة PDF`]: `Print or save ticket as PDF`,
          [`إجابات فورية بدون انتظار`]: `Instant answers, no waiting`,
          [`الأسئلة الشائعة والأجوبة الدقيقة`]: `FAQ & Detailed Answers`,
          [`هل يمكنني الحضور مباشرة دون حجز مسبق عبر الموقع؟`]: `Can I come in without booking through the website?`,
          [`نعم بالتأكيد! يمكنك الحضور في أي وقت خلال ساعات العمل (من 8 صباحاً حتى منتصف الليل). مؤشر "النبض المباشر" في أعلى الصفحة يوضح لك عدد المقاعد الشاغرة بدقة قبل تحركك.`]: `Yes, of course! You can come any time during opening hours (8 AM to midnight). The "Live Pulse" indicator at the top shows available seats before you set out.`,
          [`كيف تتعاملون مع مكالمات العمل والاجتماعات الهاتفية؟`]: `How do you handle work calls and phone meetings?`,
          [`للحفاظ على تركيز الجميع، يمنع إجراء المكالمات في "منطقة العمل الصامتة". نوفر 3 كبائن عازلة للصوت بالكامل (Phone Booths) يمكنك دخولها مجاناً لإجراء مكالماتك واجتماعات الزووم بحرية تامة دون إزعاج أحد.`]: `To keep everyone focused, calls are not allowed in the silent work area. We provide 3 fully soundproofed phone booths you can use for free for calls and Zoom meetings without disturbing anyone.`,
          [`هل يسمح بإحضار مأكولات خارجية؟`]: `Can I bring outside food?`,
          [`يُسمح بتناول الوجبات الخفيفة والساندويتشات في منطقة الكافيه واللاونج المفتوح، وتجنب الوجبات ذات الروائح النفاذة في مناطق المكاتب الصامتة حفاظاً على جودة الهواء وراحة الزملاء. كما تتوفر لدينا تشكيلة وجبات خفيفة صحية ومخبوزات طازجة يومياً.`]: `Snacks and sandwiches are allowed in the café and open lounge. Please avoid strong-smelling food in silent office areas to keep the air fresh and colleagues comfortable. We also offer healthy snacks and fresh pastries daily.`,
          [`ما مدى قوة واستقرار الإنترنت لديكم؟`]: `How strong and stable is your internet?`,
          [`الإنترنت مخدوم بخطين ألياف ضوئية منفصلين مع تحويل فوري تلقائي عند أي طارئ، بالإضافة لمولدات طاقة كهربائية خاصة بالراوترات لضمان اتصال قوي وثابت بدون انقطاع ثانية واحدة أثناء اجتماعاتك وأعمالك الحساسة.`]: `Internet runs on two separate fiber lines with automatic instant failover, plus dedicated power generators for the routers, ensuring a strong, stable connection with not a single second of downtime during your meetings and critical work.`,
          [`تحذير صارم وقاطع`]: `Strict Warning`,
          [`ميثاق الاحترام والذوق العام داخل "الست"`]: `Code of Respect & Public Conduct at El Sitt`,
          [`مساحة العمل مخصصة للمحترفين والمبدعين فقط.`]: `This workspace is reserved for professionals and creatives only.`,
          [`أي لفظ خارج أو تصرف غير لائق سيتسبب في طردك من المكان فوراً`]: `Any offensive language or improper behavior will result in immediate removal from the premises`,
          [`دون أي نقاش وبلا استرجاع لقيمة الحجز أو الرسوم حفاظاً على راحة وكرامة الجميع.`]: `without discussion and with no refund of the booking or fees, to protect everyone's comfort and dignity.`,
          [`مساحة عمل مصممة لتهيئة الذهن وإشعال شرارة الإبداع، حيث يلتقي الهدوء بالخدمة الفندقية الراقية.`]: `A workspace designed to clear the mind and spark creativity, where calm meets refined hospitality.`,
          [`التنقل السريع`]: `Quick Links`,
          [`مؤشر السعة الحية`]: `Live Capacity`,
          [`حاسبة الأسعار`]: `Pricing Calculator`,
          [`مميزات وتجهيزات المكان`]: `Amenities & Facilities`,
          [`أوقات العمل والتواصل`]: `Hours & Contact`,
          [`يومياً: 8:00 صباحاً – 12:00 منتصف الليل`]: `Daily: 8:00 AM – 12:00 AM`,
          [`الجمعة: 1:00 ظهراً – 12:00 منتصف الليل`]: `Friday: 1:00 PM – 12:00 AM`,
          [`هاتف / واتساب: 01010379368`]: `Phone / WhatsApp: 01010379368`,
          [`البريد: hello@elsitt-space.com`]: `Email: hello@elsitt-space.com`,
          [`الموقع والوصول`]: `Location & Access`,
          [`حي المعادي الهادئ، دجلة، القاهرة. بالقرب من المترو ومواقف السيارات متوفرة مجاناً لروادنا.`]: `Quiet Maadi, Degla, Cairo. Near the metro, with free parking for our guests.`,
          [`🅿️ ساحة سيارات مخصصة وآمنة`]: `🅿️ Dedicated secure parking`,
          [`جميع الحقوق محفوظة ©`]: `All rights reserved ©`,
          [`مساحة عمل الست (El Sitt Workspace).`]: `El Sitt Workspace.`,
          [`سياسة الخصوصية`]: `Privacy Policy`,
          [`شروط الاستخدام`]: `Terms of Use`
        };

        const textNodes = [];
        const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, {
          acceptNode(n) {
            const p = n.parentNode;
            if (!p || p.nodeName === 'SCRIPT' || p.nodeName === 'STYLE') return NodeFilter.FILTER_REJECT;
            if (p.closest && (p.closest('#langToggle') || p.closest('#elsittIntroOverlay') || p.closest('#headerCoupletContainer'))) return NodeFilter.FILTER_REJECT;
            return n.nodeValue.trim() ? NodeFilter.FILTER_ACCEPT : NodeFilter.FILTER_REJECT;
          }
        });

        while (walker.nextNode()) {
          const n = walker.currentNode;
          n.__ar = n.nodeValue;
          textNodes.push(n);
        }

        function applyLanguage(lang) {
          const isEN = lang === 'en';
          document.documentElement.lang = isEN ? 'en' : 'ar';
          document.documentElement.dir = isEN ? 'ltr' : 'rtl';
          textNodes.forEach(n => {
            const m = n.__ar.match(/^(\s*)([\s\S]*?)(\s*)$/);
            const translation = isEN ? EN_TEXT[m[2]] : undefined;
            n.nodeValue = translation ? m[1] + translation + m[3] : n.__ar;
          });
          DOM.langToggle.dataset.lang = isEN ? 'en' : 'ar';
          DOM.langToggle.textContent = isEN ? 'عربي' : 'English';
          ElSittStore.set('lang', lang);
        }

        DOM.langToggle.addEventListener('click', () => {
          applyLanguage(DOM.langToggle.dataset.lang === 'ar' ? 'en' : 'ar');
        });

        // Initialize with stored language if English was selected previously
        if (ElSittStore.get('lang') === 'en') {
          applyLanguage('en');
        }

      });
    })();
  </script>
</body>
</html>
