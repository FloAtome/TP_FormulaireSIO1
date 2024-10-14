
<html>
<body>

<form action="EXPL2_AnalyseFormulaire.php" method="post">

    Nom :
    <input name="nom" type="text">
<br>

    Prenom :
    <input name="prenom" type="text">
<br>

    <label for="choitBTS">Choisir votre BTS :</label>
    <select name="ChoixBTS" id="ChoixBTS">
        <option value="SIO">SIO</option>
        <option value="Assurance">Assurance</option>
        <option value="Commerce International">Commerce International</option>
        <option value="Tourisme">Tourisme</option>
        <option value="Professions Immobilières">Professions Immobilières</option>
        <option value="Négociation Digitalisation de la Relation Client">Négociation Digitalisation de la Relation Client</option>
        <option value="Support à l action managériale">Support à l action managériale</option>
        <option value="Management Commercial Opérationnel">Management Commercial Opérationnel</option>
        <option value="Gestion de La PME">Gestion de La PME</option>
        <option value="Comptabilité et Gestion">Comptabilité et Gestion</option>
        <option value="Communication">Communication</option>
    </select>
<br>
    <label for="langue">Choisir vos langues :</label>
    <select id="langue" name="langue" size="1" multiple>
        <option value="Anglais">Anglais</option>
        <option value="Espagnol">Espagnol</option>
        <option value="Allemand">Allemand</option>
        <option value="Chinois">Chinois</option>
    </select>

    <input type="submit" name="soumettre" value="OK" />

</form>
</body>
</html>




