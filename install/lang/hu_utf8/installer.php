<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'A megadott rendszergazdakönyvtár hibás';
$string['admindirname'] = 'Rendszergazdakönyvtár';
$string['admindirsettinghead'] = 'A rendszergazdakönyvtár beállítása...';
$string['admindirsettingsub'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Ez ütközik a Moodle rendszergazda-oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b>.<br /> <br /> Ezzel a Moodle-ban rendbe tehetők a rendszergazda-ugrópontok.';
$string['bypassed'] = 'Kihagyva';
$string['cannotcreatelangdir'] = 'Nem hozható létre a lang könyvtár.';
$string['cannotcreatetempdir'] = 'Nem hozható létre a temp könyvtár.';
$string['cannotdownloadcomponents'] = 'Az összetevőket nem lehet letölteni.';
$string['cannotdownloadzipfile'] = 'A tömörített állományt nem lehet letölteni.';
$string['cannotfindcomponent'] = 'Nincs meg az összetevő.';
$string['cannotsavemd5file'] = 'Az md5 állományt nem lehet elmenteni.';
$string['cannotsavezipfile'] = 'A tömörített állományt nem lehet elmenteni.';
$string['cannotunzipfile'] = 'A tömörített állományt nem lehet kicsomagolni.';
$string['caution'] = 'Vigyázat';
$string['check'] = 'Ellenőrzés';
$string['chooselanguagehead'] = 'Nyelv kiválasztása';
$string['chooselanguagesub'] = 'KIZÁRÓLAG a telepítéshez válasszon nyelvet! A portál és a felhasználó nyelvét egy későbbi képernyőn adhatja meg.';
$string['closewindow'] = 'Ablak bezárása';
$string['compatibilitysettingshead'] = 'PHP-beállítások ellenőrzése ...';
$string['compatibilitysettingssub'] = 'Szerverének az összes tesztet sikeresen kell lefuttatnia ahhoz, hogy a Moodle megfelelően működjön.';
$string['componentisuptodate'] = 'Az összetevő a legújabb.';
$string['configfilenotwritten'] = 'A telepítő kóddal nem lehetett a megadott beállításaival létrehozni a config.php állományt, feltehetőleg azért, mert a Moodle könyvtára nem írható. Az alábbi kódot kézzel átmásolhatja a Moodle gyökérkönyvtárába egy config.php nevű állományba.';
$string['configfilewritten'] = 'a config.php létrehozása sikerült';
$string['configurationcompletehead'] = 'Beállítás kész';
$string['configurationcompletesub'] = 'A Moodle megpróbálta beállításait a telepítés gyökérkönyvtárában egy állományba elmenteni.';
$string['continue'] = 'Folytatás';
$string['ctyperecommended'] = 'Ajánlatos telepíteni az opcionális ctype PHP-bővítést a portál teljesítményének növelése érdekében, különösen abban az esetben, ha a portál támogatja nem latin nyelvek használatát.';
$string['ctyperequired'] = 'A ctype PHP-bővítést a Moodle előírja a portál teljesítményének növelése és a több nyelvű kompatibilitás érdekében.';
$string['curlrecommended'] = 'Ajánlatos a választható cURL-könyvtár telepítése a Moodle Networking bekapcsolásához.';
$string['curlrecommended'] = 'Ajánlatos a választható Curl-könyvtár telepítése a Moodle Networking bekapcsolásához.';
$string['curlrequired'] = 'A Moodle most már előírja a cURL PHP-bővítést a Moodle-adattárakkal való kommunikációhoz.';
$string['customcheck'] = 'Egyéb ellenőrzések';
$string['database'] = 'Adatbázis';
$string['databasecreationsettingshead'] = 'Most a Moodle adatait tároló adatbázis beállításait kell elvégeznie. Ezt az adatbázist a telepítő automatikusan beállítja az alábbiak szerint.';
$string['databasecreationsettingssub'] = '<b>Típus: </b>a telepítő \"mysql\"-re állítja be<br /><b>Gazdagép</b>: a telepítő \"localhost\"-ra állítja<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: a telepítő  \"root\"-ra állítja<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: opcionális előtag az összes táblázatnévhez';
$string['databasesettingshead'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.';
$string['databasesettingssub'] = '<b>Típus: </b> MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mssql'] = 'Típus: SQL*Server (nem UTF-8) <b><strong  class=\"errormsg\">Kísérleti! (élesben nem használandó)</strong></b><br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mssql_n'] = '<b>Típus: </b> SQL*Server (UTF-8 bekapcsolva)<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mysql'] = '<b>Típus: </b> MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (választható)';
$string['databasesettingssub_mysqli'] = '<b>Típus: </b> Javított MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (választható)';
$string['databasesettingssub_oci8po'] = '<b>Típus:</b> Oracle<br /><b>Gazdagép</b>: nem használatos, üresen marad<br /><b>Név</b>: a tnsnames.ora kapcsolat neve<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező, max. 2cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>Típus:</b> SQL* szerver (ODBC-vel) <b><strong  class=\"errormsg\">Kísérleti! (élesben nem használandó)</strong></b><br /><b>Gazdagép:</b> a DSN ODBC-vezérlőpulton megadott neve<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_postgres7'] = '<b>Típus: </b> PostgreSQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingswillbecreated'] = '<b>Megjegyzés:</b> A telepítő megpróbálja automatikusan létrehozni az adatbázist, ha az nem létezik.';
$string['dataroot'] = 'Adatkönyvtár';
$string['datarooterror'] = 'A megadott \'Adatkönyvtár\' nem létezik, vagy nem sikerült létrehozni. Módosítsa az útvonalat vagy hozza létre a könyvtárat.';
$string['datarootpublicerror'] = 'A megadott adatkönyvtár a netről közvetlenül elérhető, adjon meg egy másik könyvtárat.';
$string['dbconnectionerror'] = 'Nem sikerült a megadott adatbázishoz csatlakozni. Ellenőrizze adatbázisának beállításait.';
$string['dbcreationerror'] = 'Hiba az adatbázis létrehozása közben. A megadott beállításokkal nem lehetett létrehozni az adatbázis nevét.';
$string['dbhost'] = 'Gazdagép szervere';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dbtype'] = 'Típus';
$string['dbwrongencoding'] = 'A kiválasztott adatbázis egy nem ajánlott kódolást használ ($a). Helyette ajánlatos unikódos (UTF-8) adatbázist használni. Egyébként ezt a tesztet átugorhatja, ha bejelöli alább az \"Adatbázis kódolásának ellenőrzése\" négyzetet, bár így a későbbiekben gondjai támadhatnak.';
$string['dbwronghostserver'] = 'A fentiekben kifejtettek szerint tartsa be a \"Gazdagép\" beállítási szabályait.';
$string['dbwrongnlslang'] = 'Webszerverén az NLS_LANG környezetváltozónak az AL32UTF8 karakterkészletet kell használni. Az OCI8 megfelelő beállításával kapcsolatban lásd a PHP dokumentációját.';
$string['dbwrongprefix'] = 'A fentiekben kifejtettek szerint tartsa be a \"Táblázati előtag\" beállítási szabályait.';
$string['directorysettingshead'] = 'Hagyja jóvá a Moodle telepítésének helyét.';
$string['directorysettingssub'] = '<b>Webcím:</b> Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p><p><b>Moodle-könyvtár:</b> Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p><p><b>Adatkönyvtár:</b> Egy olyan helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \"nobody\" vagy \"apache\") ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az internetről közvetlenül elérhető.</p>';
$string['dirroot'] = 'Moodle-könyvtár';
$string['dirrooterror'] = 'A \"Moodle-könyvtár\" beállítása feltehetőleg hibás - nem található alatta a Moodle telepítése. Az alábbi értéket visszaállítottuk.';
$string['download'] = 'Letöltés';
$string['downloadedfilecheckfailed'] = 'A letöltött állomány ellenőrzése nem sikerült.';
$string['downloadlanguagebutton'] = 'Töltse le a $a nyelvi csomagot';
$string['downloadlanguagehead'] = 'Nyelvi csomag letöltése';
$string['downloadlanguagenotneeded'] = 'Folytathatja a telepítést az alapértelmezés szerinti &quot;$a&quot; nyelvi csomaggal.';
$string['downloadlanguagesub'] = 'Letölthet most egy nyelvi csomagot és azon a nyelven folytathatja a telepítést.<br /><br />Ha nem tudja letölteni, folytathatja a telepítést angol nyelven. (A telepítés végén lehetősége lesz további nyelvi csomagok letöltésére és telepítésére.)';
$string['environmenterrortodo'] = 'A fentiekben fellelt összes környezeti problémát (hibát) el kell hárítania, mielőtt folytatja a Moodle ezen változatának a telepítését!';
$string['environmenthead'] = 'Környezetének ellenőrzése ...';
$string['environmentrecommendcustomcheck'] = 'ha ez az ellenőrzés sikertelen, az potenciális gondot jelez';
$string['environmentrecommendinstall'] = 'a megfelelő teljesítmény érdekében telepítse és kapcsolja be';
$string['environmentrecommendversion'] = 'a $a->needed változatot ajánlott a mostani $a->current helyett használni';
$string['environmentrequirecustomcheck'] = 'ennek az ellenőrzésnek sikerülnie kell';
$string['environmentrequireinstall'] = 'telepíteni kell és be kell kapcsolni';
$string['environmentrequireversion'] = 'a $a->needed változatot kell a mostani $a->current helyett használni';
$string['environmentsub'] = 'Ellenőrizzük, hogy rendszerének különféle összetevői megfelelnek-e a rendszerkövetelményeknek';
$string['environmentxmlerror'] = 'Hiba a környezeti adatok ($a->error_code) beolvasása közben';
$string['error'] = 'Hiba';
$string['fail'] = 'Hiba';
$string['fileuploads'] = 'Állományok feltöltése';
$string['fileuploadserror'] = 'Be kell kapcsolni';
$string['fileuploadshelp'] = '<p>Szerverén az állományok feltöltése feltehetőleg ki van kapcsolva.</p> <p>A Moodle ettől még telepíthető, de nem fog tudni kurzusállományokat vagy új felhasználói profilokat feltölteni.</p> <p>Állományok feltöltésének bekapcsolásához Önnek (vagy rendszeradminisztrátorának) a rendszer fő php.ini nevű állományában a <b>file_uploads</b> beállítást \'1\'-re kell módosítania.</p>';
$string['gdversion'] = 'GD-verzió';
$string['gdversionerror'] = 'Képek feldolgozásához és készítéséhez szükséges a GD-könyvtár.';
$string['gdversionhelp'] = '<p>Feltehetőleg szerverén nincs telepítve a GD.</p><p>A GD a PHP számára szükséges könyvtár, mellyel a Moodle képeket (például felhasználói ikonokat) tud feldolgozni és újakat tud készíteni (például naplódiagramokat). A Moodle működik GD nélkül is - csak ezek a lehetőség nem lesznek az Ön számára elérhetők.</p><p>A GD Unix alatti PHP-hez való hozzáadásához a PHP-t fordítsa a --with-gd paraméterrel.</p><p>Windows alatt szerkesztheti a php.ini-t: el kell távolítani a megjegyzésjelet a php_gd2.dll-re hivatkozó sor elejéről.</p>';
$string['globalsquotes'] = 'Globális változók nem biztonságos kezelése';
$string['globalsquoteserror'] = 'Javítsa ki a PHP beállításait: kapcsolja ki a disable register_globals-t és/vagy kapcsolja be a magic_quotes_gpc-t';
$string['globalsquoteshelp'] = '<p>Nem ajánlott egyszerre kikapcsolt Magic Quotes GPC-t bekapcsolt Register Globals mellett használni.</p><p>A javasolt beállítás: <b>magic_quotes_gpc = On</b> és <b>register_globals = Off</b> a php.ini állományban. </p><p>Ha nem érhető el a php.ini állománya, próbálja meg az alábbi sort beszúrni a Moodle-könyvtárában lévő .htaccess állományba: <blockquote>><div>php_value magic_quotes_gpc On></div></blockquote> <blockquote>><div>php_value register_globals Off></div></blockquote> </p>';
$string['globalswarning'] = '<p><strong>Biztonsági figyelmezetés</strong>: a megfelelő működéshez a Moodle <br />bizonyos módosításokat ír elő az adott PHP-beállításokban.<p/><p>A <em>beállítandó</em> érték: <code>register_globals=off</code>. <p>Ezek a beállítások a <code>php.ini</code>, az Apache/IIS <br />beállításával vagy a <code>.htaccess</code>-állomány szerkesztésével módosíthatók.</p>';
$string['help'] = 'Súgó';
$string['iconvrecommended'] = 'Ajánlatos telepíteni az opcionális ctype PHP-bővítést a portál teljesítményének növelése érdekében, különösen abban az esetben, ha a portál támogatja nem latin nyelvek használatát.';
$string['iconvrecommended'] = 'A portál teljesítményének növelése érdekében ajánlatos telepíteni az opcionális ICONV-könyvtárat, különösen akkor, ha a portál támogatja nemlatin nyelvek használatát.';
$string['info'] = 'Információ';
$string['installation'] = 'Telepítés';
$string['invalidmd5'] = 'Érvénytelen md5.';
$string['invalidmd5'] = 'Az ellenőrző változó hibás volt – próbálkozzék ismét';
$string['langdownloaderror'] = 'A(z) \"$a\" nyelv nincs telepítve. A telepítés angol nyelven folytatódik.';
$string['langdownloadok'] = 'A \"$a\" nyelv telepítése sikerült. A telepítés ezen a nyelven folytatódik.';
$string['language'] = 'Nyelv';
$string['magicquotesruntime'] = 'Futásidejű Magic Quotes';
$string['magicquotesruntimeerror'] = 'Ki kell kapcsolni';
$string['magicquotesruntimehelp'] = '<p>A futásidejű Magic Quotes kódot a Moodle megfelelő működéséhez ki kell kapcsolni.</p> <p>Alapesetben ez így is van ... lásd a <b>magic_quotes_runtime</b> beállítást a php.ini állományban.</p> <p>Ha nem elérhető a php.ini állománya, próbálja meg az alábbi sort beszúrni a Moodle-könyvtárában lévő .htaccess állományba:</p> <blockquote><div>php_value magic_quotes_runtime Off</div></blockquote> ';
$string['mbstringrecommended'] = 'A portál teljesítményének javítása érdekében ajánlatos telepíteni az opcionális MBSTRING-könyvtárat, különösen, ha a portál támogatja nemlatin nyelvek használatát.';
$string['memorylimit'] = 'Memóriakorlát';
$string['memorylimiterror'] = 'A PHP-memóriakorlát túl alacsonyra van állítva... ez a későbbiekben gondot okozhat.';
$string['memorylimithelp'] = '<p>Szerverén a PHP memóriakorlátja jelenleg $a. </p><p>Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva.</p><p> Ha lehet, állítsa be a PHP-t magasabb korláttal, pl. 40M-tal. Többféleképpen próbálkozhat:</p><ol><li> Ha lehet, fordítsa újra a PHP-t <i>--enable-memory-limit</i>-tel. Így a Moodle maga állíthatja be a memóriakorlátot.</li><li>Ha elérhető a php.ini állomány, módosítsa a <b>memory_limit</b> beállítását pl. 40M-ra. Ha nem éri el az állományt, kérje meg a rendszergazdát a módosítás elvégzésére.</li><li>Egyes PHP-szervereken létrehozhat egy .htaccess állományt a Moodle-könyvtárban az alábbi sorral: <blockquote><div>php_value memory_limit 40M.</div></blockquote>    <p> Vannak szerverek, ahol ez az összes PHP-oldal működését megakadályozza (az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.</p></li></ol>';
$string['missingrequiredfield'] = 'Egy szükséges mező hiányzik.';
$string['moodledocslink'] = 'Az oldalhoz tartozó Moodle-dokumentumok';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az MSSQL-bővítéshez, így nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['mssql_n'] = 'SQL*Server UTF-8 támogatással (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Ha viszont a portálja CSAK iso-8859-1 (latin) nyelveket használ, továbbra is használhatja a pillanatnyilag telepített MySQL 4.1.12 (vagy magasabb) verziót.';
$string['mysql416required'] = 'A Moodle 1.6 esetén a MySQL minimális verziószáma a 4.1.16 azért, hogy a későbbiekben minden adatot UTF-8 formában lehessen tárolni.';
$string['mysqlextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL kiterjesztéshez, így nem tud vele kommunikálni. Ellenőrizze a php.ini fájlt, vagy fordítsa újra a PHP-t.';
$string['mysqli'] = 'Javított MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL-kiterjesztéshez, így nem tud vele kommunikálni. Ellenőrizze a php.ini fájlt, vagy fordítsa újra a PHP-t. A MySQLi-kiterjesztés PHP 4 esetén nem használható.';
$string['name'] = 'Név';
$string['next'] = 'Következő';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az OCI8 bővítéshez, így nem tud kommunikálni az Oracle-lal. Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['odbcextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az ODBC-bővítéshez, így nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['ok'] = 'Rendben';
$string['opensslrecommended'] = 'Határozottan ajánlott az OpenSSL-könyvtár telepítése - ezzel kapcsolható be a hálózati Moodle.';
$string['parentlanguage'] = '<< A FORDÍTÓNAK: ha a nyelvéhez tartozik egy, a Moodle által a hiányzó szövegek feltöltésére használandó felettes nyelv, adja meg annak kódját itt. Ha ezt üresen hagyja, a helyén az angol fog szerepelni. Példa: nl >>';
$string['pass'] = 'Sikerült';
$string['password'] = 'Jelszó';
$string['pgsqlextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva a PGSQL-bővítéshez, így nem tud kommunikálni a PostgreSQL-lel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['php50restricted'] = 'A PHP 5.0.x számos ismert problémával rendelkezik, frissítsen 5.1.x-re vagy térjen vissza a 4.3.x vagy a 4.4.x változathoz';
$string['phpversion'] = 'PHP-verzió';
$string['phpversionerror'] = 'A PHP-verzió legalább 4.3.0 vagy 5.1.0 legyen (az 5.0.x több ismert gond miatt nem ajánlott).';
$string['phpversionhelp'] = 'A Moodle használatához legalább a PHP 4.3.0 vagy 5.1.0 verziója szükséges (az 5.0.x több ismert gond miatt nem ajánlott). Az Ön által használt verzió $a. Frissítse a PHP-verziót, vagy térjen át újabb PHP-verziót működtető gazdagépre! (5.0.x esetén visszatérhet a 4.4.x verziójoz is)';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Előző';
$string['qtyperqpwillberemoved'] = 'Frissítés közben az RQP-kérdéstípus törlődik. Ön nem használta ezt a kérdéstípust, ezért nem lesz gondja ezzel kapcsolatban.';
$string['qtyperqpwillberemovedanyway'] = 'Frissítés során törlődik az RQP kérdéstípus. Mivel adatbázisában szerepelnek RQP-kérdések, ezek használhatatlanok lesznek, ha nem telepíti újra a kódot a http://moodle.org/mod/data/view.php?d=13&amp;rid=797 weboldalról, mielőtt folytatja a frissítést.';
$string['remotedownloaderror'] =  'Az összetevőt nem lehet szerverére letölteni, ellenőrizze a proxy beállításait. Ajánlatos a PHP cURL-kiterjesztés használata. A(z) <a href=\"$a->url\">$a->url</a> állományt töltse le kézzel, másolja át szerverén a(z) \"$a->dest\" célkönyvtárba, és csomagolja ki ott.';
$string['remotedownloadnotallowed'] =  'Az összetevőket nem lehet szerverére letölteni(az allow_url_fopen ki van kapcsolva). A(z) <a href=\"$a->url\">$a->url</a> állományt töltse le kézzel, másolja át szerverén a(z) \"$a->dest\" célkönyvtárba, és csomagolja ki ott.';
$string['report'] = 'Jelentés';
$string['restricted'] = 'Korlátozott';
$string['safemode'] = 'Biztonságos mód';
$string['safemodeerror'] = 'A Moodle bekapcsolt biztonságos mód esetén gondokba ütközhet';
$string['safemodehelp'] = 'A Moodle bekapcsolt biztonságos mód esetén egy sor problémába ütközhet, mindenekelőtt feltehetőleg nem tud majd új állományokat létrehozni. A biztonságos módot általában túlzottan pánikoló webes rendszergazdák kapcsolják be, így valószínűleg egy másik gazdagépet kell keresnie a Moodle számára. Ha kívánja, folytathatja a telepítést, de számítson a későbbiekben néhány hibára.';
$string['serverchecks'] = 'Szerverellenőrzések';
$string['sessionautostart'] = 'Automatikus folyamatkezdés';
$string['sessionautostarterror'] = 'Ezt ki kell kapcsolni';
$string['sessionautostarthelp'] = 'A Moodle-nak folyamattámogatásra van szüksége, nélküle nem működik. A folyamatok a php.ini állományban kapcsolhatók be, lásd a session.auto_start paramétert.';
$string['skipdbencodingtest'] = 'Az adatbázis-kódolás ellenőrzésének kihagyása';
$string['status'] = 'Állapot';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'magyar';
$string['unicoderecommended'] = 'Ajánlott minden adatot unikódban (UTF-8) tárolni. Az új telepítéseket unikód alapkészletű adatbázisokba kell telepíteni. Ha újabb változatra vált, végre kell hajtania az UTF-8-ra való áttérést (lásd a Portáladminisztráció oldalát).';
$string['unicoderequired'] = 'Minden adatot unikódban (UTF-8) kell tárolni. Az új telepítéseket unikód alapkészletű adatbázisokba kell telepíteni. Ha újabb változatra vált, végre kell hajtania az UTF-8-ra való áttérést (lásd a Portáladminisztráció oldalát).';
$string['user'] = 'Felhasználó';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Azért látja ezt az oldalt, mert sikeresen telepítette és futtatja az $a->packname $a->packversion csomagot számítógépén. Gratulálunk!';
$string['welcomep30'] = 'A $a->installername tartalmazza azokat az alkalmazásokat, amelyekkel a Moodle számára kialakítható a működési környezet, azaz:';
$string['welcomep40'] = 'A csomag tartalmazza a Moodle $a->moodlerelease ($a->moodleversion)-t is.';
$string['welcomep50'] = 'A csomagban lévő alkalmazások használatára a vonatkozó engedélyek érvényesek. A teljes $a->installername csomag <a href=\"http://www.opensource.org/docs/definition_plain.html\">nyílt forráskódú</a>, közreadása pedig a <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>-licenc alapján történik.';
$string['welcomep60'] = 'A következő oldalak segítségével számítógépén egyszerűen telepítheti és beállíthatja a Moodle-t. Elfogadhatja az alapbeállításokat, de igényeinek megfelelően módosíthatja is őket.';
$string['welcomep70'] = 'Kattintson az alábbi \"Következő\" gombra és folytassa a Moodle telepítését.';
$string['wrongdestpath'] = 'Hibás célútvonal.';
$string['wrongsourcebase'] = 'Hibás URL-forrás.';
$string['wrongzipfilename'] = 'Hibás a tömörített állomány neve.';
$string['wwwroot'] = 'Webcím';
$string['wwwrooterror'] = 'A webcím nem érvényes - a Moodle mostani telepítése nincs a megadott címen. Az alábbi értéket visszaállítottuk.';
$string['xmlrpcrecommended'] = 'A külön elérhető xmlrpc-bővítés telepítése kifejezetten ajánlott a hálózati Moodle használatához.';
$string['ziprequired'] = 'A Moodle a Zip PHP bővítést igényli, az info-ZIP bináris állományokra vagy a PclZip könyvtárra már nincs szükség.';
?>
