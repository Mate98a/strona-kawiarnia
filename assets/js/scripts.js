
	var i = 0; 
    var obraz = [];
    var text = [];
	var time = 3000;

    text[0]="<h3>Irish coffee - 13 zł</h3>Czyli kawa po irlandzku, której wyróżnikiem jest dodatek irlandzkiej whiskey. Są też różne odmiany tej kawy, serwowane z innymi trunkami (z wódką, koniakiem, sherry, rumem czy szkocką whiskey – do wyboru, do koloru…). Niezastąpiona w chłodniejsze dni, kiedy potrzebujesz szybko rozgrzać organizm.";
    text[1]="<h3>Caffe Latte - 16 zł</h3>Wyjątkowo mleczna i łagodna kawa podawana w wysokich szklankach podbiła nie tylko włoskie serca, ale zyskała popularność wśród ludzi na całym świecie. Nie potrafię wymienić kawiarni, która nie serwuje tego klasyka.  Idealnie komponuje się z różnymi syropami smakowymi i posypkami, dlatego może być sposobem na słodkie co nieco.";
    text[2]="<h3>Lungo i Americano - 11 zł</h3>oba rodzaje opierają się na espresso z większą ilością wody. Różnią się natomiast objętością i sposobem dodania wody. „Lungo” to z włoskiego „długo”, a nazwa wywodzi się od „przedłużonego” espresso, czyli charakterystycznego sposobu parzenia.Taka kawa jest delikatniejsza w smaku, ale wciąż aromatyczna.";
    text[3]="<h3>Cafe frappe - 19 zł</h3>Kawowe frappe najlepiej smakują podawane w wysokich szklankach i sączone przez kolorowe słomki do napojów.  Szklanki do klasycznego frappe nie muszą być wykonane z grubego szkła, ponieważ kawa serwowana jest na zimno i nie musimy obawiać się o poparzenie. Z tego też powodu zbędne będzie uszko.";
	obraz[0] = src='/API/assets/image/kawa1.jpg';
	obraz[1] = src='/API/assets/image/kawa2.jpg';
	obraz[2] = src='/API/assets/image/kawa3.jpg';
	obraz[3] = src='/API/assets/image/kawa4.jpg';

	
	function zmien(){
        document.slide.src = obraz[i];
        document.getElementById('tekst').innerHTML = text[i];

		if(i < obraz.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("zmien()", time);
	}

    window.onload = zmien;
    

 

