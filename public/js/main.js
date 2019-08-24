$( document ).ready(function() {
 	var options = [];
	var team_names = ["Arsenal","Aston Villa","Bournemouth","Brighton & Hove Albion","Burnley","Chelsea","Crystal Palace","Everton","Leicester City","Liverpool","Manchester City","Manchester United","Newcastle United","Norwich City","Sheffield United","Southampton","Tottenham Hotspur","Watford","West Ham United","Wolverhampton Wanderers","FC Augsburg","Hertha BSC","Union Berlin","Werder Bremen","Borussia Dortmund","Fortuna Düsseldorf","Eintracht Frankfurt","SC Freiburg","1899 Hoffenheim","1. FC Köln","RB Leipzig","Bayer Leverkusen","Mainz 05","Borussia Mönchengladbach","Bayern Munich","SC Paderborn","Schalke 04","VfL Wolfsburg","Barnsley","Birmingham City","Blackburn Rovers","Brentford","Bristol City","Cardiff City","Charlton Athletic","Derby County","Fulham","Huddersfield Town","Hull City","Leeds United","Luton Town","Middlesbrough","Millwall","Nottingham Forest","Preston North End","Queens Park Rangers","Reading","Sheffield Wednesday","Stoke City","Swansea City","West Bromwich Albion","Wigan Athletic","Bohemians 1905","SK Dynamo České Budějovice","FK Jablonec","MFK Karviná","FC Slovan Liberec","FK Mladá Boleslav","SK Sigma Olomouc","SFC Opava","FC Baník Ostrava","FC Viktoria Plzeň","1. FK Příbram","SK Slavia Prague","1. FC Slovácko","AC Sparta Prague","FK Teplice","FC Fastav Zlín","ADO Den Haag","Ajax","AZ","Emmen","Feyenoord","Fortuna Sittard","Groningen","Heerenveen","Heracles Almelo","PEC Zwolle","PSV","RKC Waalwijk","Sparta Rotterdam","Twente","Utrecht","Vitesse","VVV-Venlo","Willem II","Amiens","Angers","Bordeaux","Brest","Dijon","Lille","Lyon","Marseille","Metz","Monaco","Montpellier","Nantes","Nice","Nîmes","PSG","Reims","Rennes","Saint-Étienne","Strasbourg","Toulouse","Bohemians","Cork City","Derry City","Dundalk","Finn Harps","Shamrock Rovers","Sligo Rovers","St Patrick's Athletic","UCD","Waterford","Alavés","Athletic Bilbao","Atlético Madrid","Barcelona","Celta Vigo","Eibar","Espanyol","Getafe","Granada","Leganés","Levante","Mallorca","Osasuna","Real Betis","Real Madrid","Real Sociedad","Sevilla","Valencia","Valladolid","Villarreal","Aves","Belenenses SAD","Benfica","Boavista","Braga","Famalicão","Gil Vicente","Marítimo","Moreirense","Paços de Ferreira","Portimonense","Porto","Rio Ave","Santa Clara","Sporting CP","Tondela","Vitória de Guimarães","Vitória de Setúbal","Aberdeen","Celtic","Hamilton Academical","Heart of Midlothian","Hibernian","Kilmarnock","Livingston","Motherwell","Rangers","Ross County","St Johnstone","St Mirren","Atalanta","Bologna","Brescia","Cagliari","Fiorentina","Genoa","Hellas Verona","Internazionale","Juventus","Lazio","Lecce","Milan","Napoli","Parma","Roma","Sampdoria","Sassuolo","SPAL","Torino","Udinese","Basel","Lugano","Luzern","Servette","Sion","St. Gallen","Thun","Xamax","Young Boys","Zürich","Alanyaspor","Ankaragücü","Antalyaspor","Beşiktaş","Çaykur Rizespor","Denizlispor","Fenerbahçe","Galatasaray","Gazişehir Gaziantep","Gençlerbirliği","Göztepe","İstanbul Başakşehir","Kasımpaşa","Kayserispor","Konyaspor","Sivasspor","Trabzonspor","Yeni Malatyaspor"];
	var team_names_random = ["Arsenal","Aston Villa","Bournemouth","Brighton & Hove Albion","Burnley","Chelsea","Crystal Palace","Everton","Leicester City","Liverpool","Manchester City","Manchester United","Newcastle United","Norwich City","Sheffield United","Southampton","Tottenham Hotspur","Watford","West Ham United","Wolves","Werder Bremen","Borussia Dortmund", "Schalke 04","VfL Wolfsburg", "Atlético Madrid","Barcelona", "Internazionale","Juventus","Lazio","Milan","Napoli","Parma","Roma"];

	team_names.forEach(function(item) {   
		var option = "<option value='" + item + "'>" + item + "</option>"
		options.push(option);
	
	});

	for (var i = 1; i < 9; i++) {
		$('select[name="home_team'+i+'"]').html(options);
		$('select[name="away_team'+i+'"]').html(options);
	}
	
	$('.selectpicker').selectpicker('refresh');

	$('.addMatch').click(function(e) {
		e.preventDefault();
		count = $('.match_pick').length + 1;
		 $(this).before('<div class="match_pick match_pick_add"><select class="selectpicker teams" title="Select Home Team" name="home_team'+count+'"  data-live-search="true" required=""></select><select class="selectpicker teams" title="Select Away Team" name="away_team'+count+'" data-live-search="true" required=""></select><select name="level'+count+'" title="Select Match Level" class="selectpicker" required=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div>');
		 team_names.forEach(function(item) {   
				var option = "<option value='" + item + "'>" + item + "</option>"
				options.push(option);
			
		});
		 $('select[name="home_team'+count+'"]').html(options);
		 $('select[name="away_team'+count+'"]').html(options);
		 $('.selectpicker').selectpicker('refresh');
		 $('.matches').val(count);
	})

	$('.selectRandom').click(function(e) {
		e.preventDefault();
		for (var i = 1; i < $('.match_pick').length + 1; i++) {
			$('select[name="home_team'+i+'"]').selectpicker('val', team_names_random[Math.floor(Math.random() * team_names_random.length)]);
			$('select[name="away_team'+i+'"]').selectpicker('val', team_names_random[Math.floor(Math.random() * team_names_random.length)]);
			$('select[name="level'+i+'"]').selectpicker('val', Math.floor(Math.random() * 5));
		}
	})
});