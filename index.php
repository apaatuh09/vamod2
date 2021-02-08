<html>
<head>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(54036289, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/54036289" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<meta name="yandex-verification" content="089677fdc7bce8d7" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
	  <title>Мод анализ объемов рынка - горизонтальный и вертикальный объем</title>
	  <meta name="viewport" content="width=device-width" >
	  <meta name="keywords" content="forex объемы, индикатор объема свечи forex" >
	  <meta name="description" content="Вертикальный и горизонтальный объем - Формирование рынка определяется тремя факторами – объемом, ценой и временем. Ежедневно внутри рынка развивается определенная область стоимости в соответствии с законом равновесия, который предполагает определенное количество продавцов и покупателей." >
	  <meta name="AUTHOR" CONTENT="Бывалый Трейдер" >
	  <meta name="MOD" CONTENT="Mr_DIV" >
	  <meta name="copyright" content="© 2017 Бывалый Трейдер">
	  <link rel="icon" type="image/png" href="icon.png"/>
	  <link rel="shortcut icon" type="image/png" href="icon.png"/>
  <script src="js/jquery-3.2.1.min.js" ></script>
  <script src="js/jquery-ui.min.js" ></script>
  <script src="js/tv.js" ></script>
<link rel="stylesheet" href="css/styleshi.css" >

</head>

<body>
<!-- <div class="tradingview-widget-container"> -->

<!-- </div> -->
<canvas id="valx" ></canvas>
<div class="divinp" >
  <div class="select selectdiv" >
	<div id="pair" val="EURO" class="sel" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/USD</div>
	<div class="divscrol" >
		<div title="AUD/CAD - Binomo" val="AUD/CAD" id="AUD_CAD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />AUD/CAD</div>
		<div title="AUD/JPY - Binomo" val="AUD/JPY" id="AUD_JPY" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />AUD/JPY</div>
		<div title="AUD/USD - Binomo" val="AUD/USD" id="AUD_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />AUD/USD</div>
		<div title="CAD/CHF - Binomo" val="CAD/CHF" id="CAD_CHF" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />CAD/CHF</div>
		<div title="EUR/CAD - Binomo" val="EUR/CAD" id="EUR_CAD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/CAD</div>
		<div title="EUR/GBP - Binomo" val="EUR/GBP" id="EUR_GBP" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/GBP</div>
		<div title="EUR/JPY - Binomo" val="EUR/JPY" id="EUR_JPY" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/JPY</div>
		<div title="EUR/USD - Binomo" val="EURO" id="EURO" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/USD</div>
		<div title="GBP/AUD - Binomo" val="GBP/AUD" id="GBP_AUD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />GBP/AUD</div>
		<div title="GBP/JPY - Binomo" val="GBP/JPY" id="GBP_JPY" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />GBP/JPY</div>		
		<div title="GBP/USD - Binomo" val="GBP/USD" id="GBP_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />GBP/USD</div>
		<div title="NZD/USD - Binomo" val="NZD/USD" id="NZD_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />NZD/USD</div>
		<div title="USD/CAD - Binomo" val="USD/CAD" id="USD_CAD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />USD/CAD</div>
		<div title="USD/CHF - Binomo" val="USD/CHF" id="USD_CHF" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />USD/CHF</div>
		<div title="USD/JPY - Binomo" val="USD/JPY" id="USD_JPY" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />USD/JPY</div>
		<div title="ALTIDX - Binomo" val="ALTBITF-CXDXF" id="ALTBITF-CXDXF" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />ALTIDX</div>
		<div title="CRYPTO IDX - Binomo" val="CRY/IDX" id="CRY_IDX" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />CRYPTO IDX</div>
		<div title="Bitcoin - Binomo" val="BTC/USD" id="BTC_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Bitcoin</div>
		<div title="Litecoin - Binomo" val="LTC/USD" id="LTC_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Litecoin</div>
		<div title="BTC/LTC - Binomo" val="BTC/LTC" id="BTC_LTC" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />BTC/LTC</div>
		<div title="BCH/USD - Binomo" val="BCH/USD" id="BCH_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />BCH/USD</div>
		<div title="EOS/USD - Binomo" val="EOS/USD" id="EOS_USD" data="Binomo" class="sel sels" ><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EOS/USD</div>
		
		<!-- <div title="AUD/CAD-OTC - Binomo" val="AUDCAD-OTC" id="AUDCAD-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />AUD/CAD (OTC)</div> -->
		<!-- <div title="EUR/USD-OTC - Binomo" val="EURUSD-OTC" id="EURUSD-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/USD (OTC)</div> -->
		<!-- <div title="EUR/CAD-OTC - Binomo" val="EURCAD-OTC" id="EURCAD-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />EUR/CAD (OTC)</div> -->
		<!-- <div title="USD/JPY-OTC - Binomo" val="USDJPY-OTC" id="USDJPY-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />USD/JPY (OTC)</div> -->
		<!-- <div title="GBP/USD-OTC - Binomo" val="GBPUSD-OTC" id="GBPUSD-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />GBP/USD (OTC)</div> -->
		<!-- <div title="GBP/JPY-OTC - Binomo" val="GBPJPY-OTC" id="GBPJPY-OTC" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />GBP/JPY (OTC)</div> -->
		
		<div title="AUD/CAD-OTC - Binomo" val="Z-AUD/CAD" id="Z-AUD_CAD" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-AUD/CAD (OTC)</div>
		<div title="EUR/USD-OTC - Binomo" val="Z-EUR/USD" id="Z-EUR_USD" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-EUR/USD (OTC)</div>
		<div title="EUR/CAD-OTC - Binomo" val="Z-EUR/CAD" id="Z-EUR_CAD" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-EUR/CAD (OTC)</div>
		<div title="USD/JPY-OTC - Binomo" val="Z-USD/JPY" id="Z-USD_JPY" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-USD/JPY (OTC)</div>
		<div title="GBP/USD-OTC - Binomo" val="Z-GBP/USD" id="Z-GBP_USD" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-GBP/USD (OTC)</div>
		<div title="GBP/JPY-OTC - Binomo" val="Z-GBP/JPY" id="Z-GBP_JPY" data="Binomo" class="sel sels"><img class="imgsel" src="img/Binomo.png" width="18px" height="18px" />Z-GBP/JPY (OTC)</div>


		<div title="AUD/USD - Binary" val="frxAUDUSD" id="frxAUDUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD/USD</div>
		<div title="EUR/AUD - Binary" val="frxEURAUD" id="frxEURAUD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/AUD</div>
		<div title="EUR/CAD - Binary" val="frxEURCAD" id="frxEURCAD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/CAD</div>
		<div title="EUR/CHF - Binary" val="frxEURCHF" id="frxEURCHF" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/CHF</div>
		<div title="AUD/JPY - Binary" val="frxAUDJPY" id="frxAUDJPY" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD/JPY</div>
		<div title="EUR/GBP - Binary" val="frxEURGBP" id="frxEURGBP" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/GBP</div>
		<div title="EUR/JPY - Binary" val="frxEURJPY" id="frxEURJPY" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/JPY</div>
		<div title="EUR/USD - Binary" val="frxEURUSD" id="frxEURUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/USD</div>
		<div title="GBP/AUD - Binary" val="frxGBPAUD" id="frxGBPAUD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/AUD</div>
		<div title="GBP/JPY - Binary" val="frxGBPJPY" id="frxGBPJPY" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/JPY</div>
		<div title="GBP/USD - Binary" val="frxGBPUSD" id="frxGBPUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/USD</div>
		<div title="USD/CAD - Binary" val="frxUSDCAD" id="frxUSDCAD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/CAD</div>
		<div title="USD/CHF - Binary" val="frxUSDCHF" id="frxUSDCHF" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/CHF</div>
		<div title="USD/JPY - Binary" val="frxUSDJPY" id="frxUSDJPY" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/JPY</div>
		

		<div title="AUD/CAD - Binary" val="frxAUDCAD" id="frxAUDCAD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD/CAD</div>
		<div title="AUD/CHF - Binary" val="frxAUDCHF" id="frxAUDCHF" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD/CHF</div>
		<div title="AUD/NZD - Binary" val="frxAUDNZD" id="frxAUDNZD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD/NZD</div>
		<div title="EUR/NZD - Binary" val="frxEURNZD" id="frxEURNZD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR/NZD</div>
		<div title="GBP/CAD - Binary" val="frxGBPCAD" id="frxGBPCAD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/CAD</div>
		<div title="GBP/CHF - Binary" val="frxGBPCHF" id="frxGBPCHF" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/CHF</div>
		<div title="GBP/NOK - Binary" val="frxGBPNOK" id="frxGBPNOK" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/NOK</div>
		<div title="GBP/NZD - Binary" val="frxGBPNZD" id="frxGBPNZD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP/NZD</div>
		<div title="NZD/JPY - Binary" val="frxNZDJPY" id="frxNZDJPY" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />NZD/JPY</div>
		<div title="NZD/USD - Binary" val="frxNZDUSD" id="frxNZDUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />NZD/USD</div>
		<div title="USD/MXN - Binary" val="frxUSDMXN" id="frxUSDMXN" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/MXN</div>
		<div title="USD/NOK - Binary" val="frxUSDNOK" id="frxUSDNOK" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/NOK</div>
		<div title="USD/PLN - Binary" val="frxUSDPLN" id="frxUSDPLN" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/PLN</div>
		<div title="USD/SEK - Binary" val="frxUSDSEK" id="frxUSDSEK" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD/SEK</div>

		<div title="Золото/USD - Binary" val="frxXAUUSD" id="frxXAUUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Золото/USD</div>
		<div title="Палладий/USD - Binary" val="frxXPDUSD" id="frxXPDUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Палладий/USD</div>
		<div title="Платина/USD - Binary" val="frxXPTUSD" id="frxXPTUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Платина/USD</div>
		<div title="Серебро/USD - Binary" val="frxXAGUSD" id="frxXAGUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Серебро/USD</div>
		<div title="Нефть/USD - Binary" val="frxBROUSD" id="frxBROUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Нефть/USD</div>

		<div title="WLD/AUD - Binary" val="WLDAUD" id="WLDAUD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />AUD индекс</div>
		<div title="WLD/EUR - Binary" val="WLDEUR" id="WLDEUR" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />EUR индекс</div>
		<div title="WLD/GBP - Binary" val="WLDGBP" id="WLDGBP" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />GBP индекс</div>
		<div title="WLD/USD - Binary" val="WLDUSD" id="WLDUSD" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />USD индекс</div>


		<div title="R_10 1с - Binary" val="1HZ10V" id="1HZ10V" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 10 1с</div>
		<div title="R_100 1с - Binary" val="1HZ100V" id="1HZ100V" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 100 1с</div>
		<div title="R_10 - Binary" val="R_10" id="R_10" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 10</div>
		<div title="R_25 - Binary" val="R_25" id="R_25" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 25</div>
		<div title="R_50 - Binary" val="R_50" id="R_50" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 50</div>
		<div title="R_75 - Binary" val="R_75" id="R_75" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 75</div>
		<div title="R_100 - Binary" val="R_100" id="R_100" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Индекс 100</div>
		

		
		
		<div title="RD/BEAR - Binary" val="RDBEAR" id="RDBEAR" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Медвежий индекс</div>
		<div title="RD/BULL - Binary" val="RDBULL" id="RDBULL" data="Binary" class="sel sels"><img class="imgsel" src="img/Binary.png" width="18px" height="18px" />Бычий индекс</div>

		<!-- <div title="BRENT - OlympTrade" val="_BRN" id="_BRN" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />BRENT</div> -->
		<!-- <div title="Apple - OlympTrade" val="1AAPL" id="AAPL" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Apple</div> -->
		<!-- <div title="AUD CAD - OlympTrade" val="AUDCAD" id="AUDCAD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />AUD CAD</div> -->
		<!-- <div title="AUD CHF - OlympTrade" val="AUDCHF" id="AUDCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />AUD CHF</div> -->
		<!-- <div title="AUD JPY - OlympTrade" val="AUDJPY" id="AUDJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />AUD JPY</div> -->
		<!-- <div title="AUD NZD - OlympTrade" val="AUDNZD" id="AUDNZD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />AUD NZD</div> -->
		<!-- <div title="AUD USD - OlympTrade" val="AUDUSD" id="AUDUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />AUD USD</div> -->
		<!-- <div title="Boeing - OlympTrade" val="BA" id="BA" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Boeing</div> -->
		<!-- <div title="Bitcoin Cash - OlympTrade" val="BCHUSD" id="BCHUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Bitcoin Cash</div> -->
		<!-- <div title="Bitcoin - OlympTrade" val="Bitcoin" id="Bitcoin" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Bitcoin</div> -->
		<!-- <div title="BMW - OlympTrade" val="BMW" id="BMW" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />BMW</div> -->
		<!-- <div title="Bitcoin Gold - OlympTrade" val="BTGUSD" id="BTGUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Bitcoin Gold</div> -->
		<!-- <div title="CAD CHF - OlympTrade" val="CADCHF" id="CADCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />CAD CHF</div> -->
		<!-- <div title="CAD JPY - OlympTrade" val="CADJPY" id="CADJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />CAD JPY</div> -->
		<!-- <div title="CHF JPY - OlympTrade" val="CHFJPY" id="CHFJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />CHF JPY</div> -->
		<!-- <div title="Dash - OlympTrade" val="DASHUSD" id="DASHUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Dash</div> -->
		<!-- <div title="S\u0026P 500 - OlympTrade" val="ES" id="ES" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />S&P 500</div> -->
		<!-- <div title="Ethereum Classic - OlympTrade" val="ETCUSD" id="ETCUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Ethereum Classic</div> -->
		<!-- <div title="ETH BTC - OlympTrade" val="ETHBTC" id="ETHBTC" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />ETH BTC</div> -->
		<!-- <div title="Ethereum - OlympTrade" val="ETHUSD" id="ETHUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Ethereum</div> -->
		<!-- <div title="EUR AUD - OlympTrade" val="EURAUD" id="EURAUD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR AUD</div> -->
		<!-- <div title="EUR CAD - OlympTrade" val="EURCAD" id="EURCAD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR CAD</div> -->
		<!-- <div title="EUR CHF - OlympTrade" val="EURCHF" id="EURCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR CHF</div> -->
		<!-- <div title="EUR GBP - OlympTrade" val="EURGBP" id="EURGBP" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR GBP</div> -->
		<!-- <div title="EUR JPY - OlympTrade" val="EURJPY" id="EURJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR JPY</div> -->
		<!-- <div title="EUR NZD - OlympTrade" val="EURNZD" id="EURNZD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR NZD</div> -->
		<!-- <div title="EUR RUB - OlympTrade" val="EURRUB" id="EURRUB" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR RUB</div> -->
		<!-- <div title="EUR USD - OlympTrade" val="EURUSD" id="EURUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EUR USD</div> -->
		<!-- <div title="Facebook - OlympTrade" val="FB" id="FB" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Facebook</div> -->
		<!-- <div title="CAC 40 - OlympTrade" val="FCE" id="FCE" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />CAC 40</div> -->
		<!-- <div title="DAX - OlympTrade" val="FDAX" id="FDAX" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />DAX</div> -->
		<!-- <div title="EURO STOXX 50 - OlympTrade" val="FESX" id="FESX" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />EURO STOXX 50</div> -->
		<!-- <div title="GBP AUD - OlympTrade" val="GBPAUD" id="GBPAUD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP AUD</div> -->
		<!-- <div title="GBP CAD - OlympTrade" val="GBPCAD" id="GBPCAD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP CAD</div> -->
		<!-- <div title="GBP CHF - OlympTrade" val="GBPCHF" id="GBPCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP CHF</div> -->
		<!-- <div title="GBP JPY - OlympTrade" val="GBPJPY" id="GBPJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP JPY</div> -->
		<!-- <div title="GBP NZD - OlympTrade" val="GBPNZD" id="GBPNZD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP NZD</div> -->
		<!-- <div title="GBP USD - OlympTrade" val="GBPUSD" id="GBPUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />GBP USD</div> -->
		<!-- <div title="Google - OlympTrade" val="GOOGL" id="GOOGL" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Google</div> -->
		<!-- <div title="Copper - OlympTrade" val="HG" id="HG" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Copper</div> -->
		<!-- <div title="Hang Seng Index - OlympTrade" val="HSI" id="HSI" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Hang Seng Index</div> -->
		<!-- <div title="IBM - OlympTrade" val="IBM" id="IBM" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />IBM</div> -->
		<!-- <div title="Coca-Cola - OlympTrade" val="KO" id="KO" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Coca-Cola</div> -->
		<!-- <div title="LTC BTC - OlympTrade" val="LTCBTC" id="LTCBTC" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />LTC BTC</div> -->
		<!-- <div title="Litecoin - OlympTrade" val="LTCUSD" id="LTCUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Litecoin</div> -->
		<!-- <div title="McDonald's - OlympTrade" val="MCD" id="MCD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />McDonald's</div> -->
		<!-- <div title="Microsoft - OlympTrade" val="MSFT" id="MSFT" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Microsoft</div> -->
		<!-- <div title="Natural Gas - OlympTrade" val="NG" id="NG" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Natural Gas</div> -->
		<!-- <div title="NINTENDO - OlympTrade" val="NINTENDO_JP" id="NINTENDO_JP" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NINTENDO</div> -->
		<!-- <div title="Nikkei 225 - OlympTrade" val="NKD" id="NKD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Nikkei 225</div> -->
		<!-- <div title="NASDAQ - OlympTrade" val="NQ" id="NQ" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NASDAQ</div> -->
		<!-- <div title="NZD CAD - OlympTrade" val="NZDCAD" id="NZDCAD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NZD CAD</div> -->
		<!-- <div title="NZD CHF - OlympTrade" val="NZDCHF" id="NZDCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NZD CHF</div> -->
		<!-- <div title="NZD JPY - OlympTrade" val="NZDJPY" id="NZDJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NZD JPY</div> -->
		<!-- <div title="NZD USD - OlympTrade" val="NZDUSD" id="NZDUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />NZD USD</div> -->
		<!-- <div title="Platinum - OlympTrade" val="PL" id="PL" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Platinum</div> -->
		<!-- <div title="Starbucks - OlympTrade" val="SBUX" id="SBUX" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Starbucks</div> -->
		<!-- <div title="RUSSELL 2000 - OlympTrade" val="TF" id="TF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />RUSSELL 2000</div> -->
		<!-- <div title="Tesla - OlympTrade" val="TSLA" id="TSLA" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Tesla</div> -->
		<!-- <div title="USD CAD - OlympTrade" val="USDCAD" id="USDCAD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD CAD</div> -->
		<!-- <div title="USD CHF - OlympTrade" val="USDCHF" id="USDCHF" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD CHF</div> -->
		<!-- <div title="USD CLP - OlympTrade" val="USDCLP" id="USDCLP" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD CLP</div> -->
		<!-- <div title="USD JPY - OlympTrade" val="USDJPY" id="USDJPY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD JPY</div> -->
		<!-- <div title="USD MXN - OlympTrade" val="USDMXN" id="USDMXN" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD MXN</div> -->
		<!-- <div title="USD NOK - OlympTrade" val="USDNOK" id="USDNOK" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD NOK</div> -->
		<!-- <div title="USD RUB - OlympTrade" val="USDRUB" id="USDRUB" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD RUB</div> -->
		<!-- <div title="USD SGD - OlympTrade" val="USDSGD" id="USDSGD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD SGD</div> -->
		<!-- <div title="USD TRY - OlympTrade" val="USDTRY" id="USDTRY" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />USD TRY</div> -->
		<!-- <div title="Visa - OlympTrade" val="V" id="V" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Visa</div> -->
		<!-- <div title="Silver - OlympTrade" val="XAGUSD" id="XAGUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Silver</div> -->
		<!-- <div title="Gold - OlympTrade" val="XAUUSD" id="XAUUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Gold</div> -->
		<!-- <div title="Monero - OlympTrade" val="XMRUSD" id="XMRUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Monero</div> -->
		<!-- <div title="Ripple - OlympTrade" val="XRPUSD" id="XRPUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Ripple</div> -->
		<!-- <div title="Dow Jones - OlympTrade" val="YM" id="YM" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Dow Jones</div> -->
		<!-- <div title="FTSE 100 - OlympTrade" val="Z" id="Z" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />FTSE 100</div> -->
		<!-- <div title="Zcash - OlympTrade" val="ZECUSD" id="ZECUSD" data="OlympTrade" class="sel sels" ><img class="imgsel" src="img/OlympTrade.png" width="18px" height="18px" />Zcash</div> -->

	  </div></div>
  <select id="size" class="select" >
	<option value="15" id="15" >15c.</option>
	<option value="60" id="60" >M1</option>
	<option value="120" id="60" >M2</option>
	<option value="180" id="60" >M3</option>
	<option value="240" id="60" >M4</option>
	<option value="300" id="300" >M5</option>
	<option value="600" id="600" >M10</option>
	<option value="900" id="900" >M15</option>
	<option value="1800" id="1800" >M30</option>
	<option value="3600" id="3600" >H1</option>
	<option value="14400" id="14400" >H4</option>
	<option value="86400" id="86400" >D1</option>
	<option value="604800" id="604800" >W1</option>
  </select>
  <input id="period" value="10" placeholder="Период" class="select" />
  <br>
	<div class="hiden" id="url1">
		<input class="checkbox" type="checkbox" id="open_menu"><label>Menu setting</label>
		<br>
	          <div id="VA_MOD" title="Тут можно скачать последнюю версию и обсудить дальнейшие разработки">RizredVlo7zer0✬ <br>Premium Candle Indikator :)</div>
		<br>
	</div>
	<div id="Menu">
	  <select id="background" class="select" type="hidden" title="Выбери желаемый цвет фона">
		<option value="0" id="21252c" >Default</option>
	  </select>
		<input class="checkbox" type="checkbox" id="color"><label>Value colors</label>
		<br>
		<input class="checkbox" type="checkbox" id="invert"><label>Warna by trend</label>
		<br>
		<input class="checkbox" type="checkbox" id="timer"><label>Timer menurun</label>
		<br>
		<input class="checkbox" type="checkbox" id="max_obj"><label>Max. volume</label>
		<br>
		<input class="checkbox" type="checkbox" id="strelki_check"><label>Tunjukkan panah</label>
		<br>
		<input class="checkbox" type="checkbox" id="strelki_procent"><label>Panah kecil</label>
		<br>
		<input class="checkbox" type="checkbox" id="blok_shema"><label>latar gambar</label>
		<br>
		<input class="checkbox" type="checkbox" id="max_obj_color"><label>Warna maks. volume</label>
		
		<input class="checkbox" type="hidden" id="odinak"><!--<label>Menemukan nilai yang sama</label>-->
		<br>
		<input class="checkbox" type="checkbox" id="trading_view_graff"><label>Grafik TradingView</label>
		<!--<br>
		<label>Potongan nilai awal :</label>--><input type="number" id="obrez" value="0" min="0" max="15" hidden="true" >
		<br>

		<!-- <input type="number" id="razmer_obj" value="5" min="1" max="30" title="Размер шрифта значений объёма"><label>Font volume</label> -->
		<!-- <br><br><br> -->
		<select id="font" class="select" style="width: 0px; height: 0px;" title="Где менеяем шрифт?" hidden="true" >
			<option value="0" id="vremya_size" >font waktu</option>
			<option value="1" id="max_size" >font poppy. volume</option>
			<option value="2" id="gis_size" >harga grafik batang</option>
			<option value="3" id="ur_gist" >font maks. histogram</option>
			<option value="4" id="ur_str_size" >font panah besar</option>
			<option value="5" id="str_min_size" >font panah kecil</option>
		</select>
		<br>
		<input type="number" id="font_size" value="14" min="1" max="100" hidden="true" ><!--<label>Ukuran huruf</label>-->
		<br><br>
	</div>
	<div id="Strelki_On" hidden="true" >
		<!-- <div class="str_green"><img id="upa" src="img/upa.png" width="150" height="150"></div> -->
		<!-- <div class="str_red"><img id="downa" src="img/downa.png" width="150" height="150"></div> -->
		<div class="close_1"><label id="close_1"></label></div>
	</div>
</div>
<div class="preload" ></div>
<script src="js/javas_MOD.js" ></script>
</body>
</html>
