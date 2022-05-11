<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'beinsports.com[TH]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-11',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'en',
  'max_day' => '7',
  'first_show' => '1',
  'keepindexpage' => 'on',
  'url1' => 'https://epg.beinsports.com/utctime_th.php?cdate=##urldate1##&offset=0&mins=00&category=sports&serviceidentity=beinsports.com',
  'requestOption1' => '1',
  'accept_header1' => 'text/html, */*; q=0.01',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'epg.beinsports.com',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y-m-d',
  'show' => 'id=channels_##channel##>.*?(?:<li id)(.*?)(?:<\\/li>).*?id=\'ruler_channels_##channel##\'>',
  'start' => '<p class=time(?:_disable)?>(\\d{2}[:\\.]\\d{2})',
  'start_format' => 'H#i',
  'stop' => '<p class=time(?:_disable)?>\\d{2}[:\\.]\\d{2}.*?(\\d{2}[:\\.]\\d{2})',
  'stop_format' => 'H#i',
  'title' => '<p class=title(?:_disable)?>(.*?)<\\/p>',
  'category' => '<p class=format(?:_disable)?>(.*?)<\\/p>|#|live=\'(1)\'||#replace#^(1)||Live',
  'channel_logo' => 'id=channels_##channel##>.*?src=\'(.*?)\'||#addstart#https://epg.beinsports.com/',
  'ccurl1' => 'https://epg.beinsports.com/utctime_th.php?cdate=##urldate1##&offset=0&mins=00&category=sports&serviceidentity=beinsports.com',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html, */*; q=0.01',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'cchost_header1' => 'epg.beinsports.com',
  'ccurldate_format1' => 'Y-m-d',
  'ccchannel_block' => '(id=channels.*?<div class=\'col-xs-8)',
  'ccchannel_id' => 'id=channels_(\\d+)',
  'ccchannel_name' => '<img.*?src=\'.*\\/(.*?)\\.',
);
?>