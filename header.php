<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light" lang="sv">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;family=Inter:wght@300;400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"> -->

  <?php wp_head(); ?>
</head>

<style>
  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
  }

  .technical-grid {
    background-image: radial-gradient(#c4c7cb 1px, transparent 1px);
    background-size: 40px 40px;
  }
</style>

<body class="bg-surface text-on-surface font-body antialiased">
  <!-- TopAppBar -->
  <nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-[0px_20px_40px_rgba(83,96,107,0.08)]">
    <div class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
      <div class="text-2xl font-bold tracking-tighter text-[#53606b] dark:text-[#dceaf7] font-['Roboto']" style="">Redesign</div>
      <div class="hidden md:flex items-center space-gap-8 gap-8">
        <a class="text-[#53606b] dark:text-[#dceaf7] font-bold border-b-2 border-[#53606b] font-['Roboto'] font-medium tracking-tight" href="#" style="">Home</a>
        <a class="text-[#53606b]/70 dark:text-[#dceaf7]/70 hover:text-[#53606b] transition-all duration-300 font-['Roboto'] font-medium tracking-tight" href="#" style="">Services</a>
        <a class="text-[#53606b]/70 dark:text-[#dceaf7]/70 hover:text-[#53606b] transition-all duration-300 font-['Roboto'] font-medium tracking-tight" href="#" style="">Pricing</a>
        <a class="text-[#53606b]/70 dark:text-[#dceaf7]/70 hover:text-[#53606b] transition-all duration-300 font-['Roboto'] font-medium tracking-tight" href="#" style="">About us</a>
        <a class="text-[#53606b]/70 dark:text-[#dceaf7]/70 hover:text-[#53606b] transition-all duration-300 font-['Roboto'] font-medium tracking-tight" href="#" style="">Wordpress</a>
        <a class="text-[#53606b]/70 dark:text-[#dceaf7]/70 hover:text-[#53606b] transition-all duration-300 font-['Roboto'] font-medium tracking-tight" href="#" style="">Contact</a>
      </div>
      <button class="bg-primary text-on-primary px-6 py-2 rounded-lg font-medium hover:bg-primary-fixed-dim transition-all duration-300 scale-95 active:opacity-80" style="">Get a Quote</button>
    </div>
  </nav>