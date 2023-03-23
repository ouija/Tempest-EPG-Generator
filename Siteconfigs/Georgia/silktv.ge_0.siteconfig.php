<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'silktv.ge',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-23',
  'rev_no' => 'R0',
  'timezone' => '##usertime##',
  'culture' => 'ka',
  'max_day' => '5.1',
  'episodeOption' => '1',
  'url1' => 'https://silktv.ge/v1.5/?m=son',
  'requestOption1' => '2',
  'post_data1' => '&device_id1=0.9982889414527859&device_type=Browser&player_id=Flash&location=Tbilisi&resolution=1920&os_version=111&device_name=Win32 Chrome&caller=[{"CMD": "son"}]',
  'accept_header1' => '*/*',
  'content_type1' => 'text/plain;charset=UTF-8',
  'host_header1' => 'silktv.ge',
  'origin_header1' => 'https://silktv.ge',
  'grabber_1' => 'on',
  'gpattern_1' => '"data":"(.*?)"',
  'url2' => 'https://silktv.ge/v1.5/?m=epg&sid=##grabber_1##&cid=##channel##&sdt=##urldate2##000000&edt=##stopdate2##235959',
  'requestOption2' => '1',
  'accept_header2' => 'application/json, text/javascript, */*; q=0.01',
  'host_header2' => 'silktv.ge',
  'XMLHttpRequest2' => 'on',
  'urldate_format2' => 'Ymd',
  'stopdate_format2' => 'Ymd',
  'show' => '({"id".*?})',
  'start' => '"start":"(\\d+)00"',
  'start_format' => 'YmdHis',
  'stop' => '"end":"(\\d+)00"',
  'stop_format' => 'YmdHis',
  'title' => '"title":"(.*?)","||#replace#(,\\s\\d+\\sсезон.*)||',
  'subtitle' => ', \\d+ с\\. "(.*?)"',
  'desc' => '"descr":"(.*?)",',
  'season' => '\\s(\\d+) сезон',
  'episode' => 'сезон, (\\d+) с\\.',
  'channel_logo' => '||#add#https://www.silktv.ge/chimages/##cclogo##.jpg',
  'ccurl1' => 'https://silktv.ge/v1.5/?m=son',
  'ccrequestOption1' => '2',
  'ccpost_data1' => '&device_id1=0.9982889414527859&device_type=Browser&player_id=Flash&location=Tbilisi&resolution=1920&os_version=111&device_name=Win32 Chrome&caller=[{"CMD": "son"}]',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'text/plain;charset=UTF-8',
  'cchost_header1' => 'silktv.ge',
  'ccorigin_header1' => 'https://silktv.ge',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => '"data":"(.*?)"',
  'ccurl2' => 'https://silktv.ge/v1.5/?m=list-channels-all&sid=##grabber_1##',
  'ccrequestOption2' => '1',
  'ccaccept_header2' => 'application/json, text/javascript, */*; q=0.01',
  'cchost_header2' => 'silktv.ge',
  'ccXMLHttpRequest2' => 'on',
  'ccchannel_block' => '{"id".*?"physicalSettings":',
  'ccchannel_id' => '{"id":(\\d+)',
  'ccchannel_name' => '"name":"(.*?)",',
  'ccchannel_logo' => '\\/chimages\\/(\\d+)',
);
?>