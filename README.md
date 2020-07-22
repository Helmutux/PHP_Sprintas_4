# PHP_Sprintas_4
Įmonės internetinio tinklapio sukūrimas naudojant wordpress turinio valdymo sistemą.
GitHub patalpintas susikurtos temos (kurios pagrindu veikia puslapis) kodas.

Realizuota:

1. Meniu
  - Pradžia
  - Apie mus
  - Kontaktai
  Kiekvienas meniu punktas atidaro atskirą puslapį (page.php). Visi jie turi bendrą viršų (header.php), šonininį meniu (sidebar.php), apačią (footer.php).
  Pradiniame puslapyje atvaizduojami 3 naujausi sutrumpinti (the_excerpt())įrašai.
 
2. Atskirų įrašų pilna (the_content()) peržiūra atskirame (single.php) puslapyje.

3. Visame puslapyje veikianti tekstinė paieška (search.php), pateikianti rezultate įrašų, turinčių savyje užklaustą žodį, atvaizdavimą arba pranešimą, kad nieko nesurasta.

4. Įrašų pateikimas (filtravimas ir atvaizdavimas) pagal įrašo kategoriją (category.php) arba žymę (tag.php).

5. Puslapių pagination.

6. Bandant atidaryti neegzistuojantį psl, nukreipiama į atskirą 404 psl (404.php)
