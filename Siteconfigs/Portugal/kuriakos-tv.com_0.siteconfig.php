<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'kuriakos-tv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-07-23',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Lisbon',
  'culture' => 'pt',
  'max_day' => '7',
  'episodeOption' => '1',
  'url1' => 'http://www.kuriakos-tv.com/ajaxfunction',
  'requestOption1' => '2',
  'post_data1' => 'getProgramation=##urldate1##',
  'accept_header1' => '*/*',
  'content_type1' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'host_header1' => 'www.kuriakos-tv.com',
  'origin_header1' => 'http://www.kuriakos-tv.com',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y-n-j',
  'show' => '(<div\\s*class="item-row.*?<\\/a>\\s*<\\/div>)',
  'start' => '<p>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<h4>(.*?)<\\/h4>|>|title="(.*?)"',
  'category' => '\\/categories\\/cat_(.*?)\\.png||#word#',
  'showicon' => '"box-image">\\s*<img src="(.*?)"||#addstart#http://www.kuriakos-tv.com/',
  'season' => 'Temporada\\s*(\\d+)',
  'episode' => 'Episódio\\s*(\\d+)',
  'channel_logo' => '||#add#http://www.kuriakos-tv.com/img/logo.png?##channel##',
  'pshown' => '<p>(repetição)<\\/p>',
  'new' => '<p>(novo)<\\/p>',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => 'http://www.kuriakos-tv.com##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'www.kuriakos-tv.com',
  'detail_desc' => '<p class="text">(.*?)<\\/p>',
  'detail_production_date' => 'Ano de Produção<\\/span><span>(\\d+)',
  'detail_actor' => 'Elenco(?:\\(a\\))?<\\/span><span>(.*?)<\\/span>||#split#(\\s*\\&\\s*|,)',
  'detail_director' => '(?:Realizador|Diretor de Informação)(?:\\(a\\))?<\\/span><span>(.*?)<\\/span>||#split#(\\s*\\&\\s*|,)',
  'detail_presenter' => 'Apresentador(?:\\(a\\))?<\\/span><span>(.*?)<\\/span>||#split#(\\s*\\&\\s*|,)',
  'detail_producer' => 'Produ(?:ção(?:\\sde)?|tor)(?:\\(a\\))?<\\/span><span>(.*?)<\\/span>||#split#(\\s*\\&\\s*|,)||#replace#(\\d+)||',
  'detail_composer' => 'Musical(?:\\(a\\))?<\\/span><span>(.*?)<\\/span>||#split#(\\s*\\&\\s*|,)',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#kuriakostv',
  'ccchannel_name' => '||#set#Kuriakos TV',
);
?>