<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="user_firstname">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="téléphone">Téléphone :</label>
        <input type="tel" id="téléphone" name="user_tel">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select id="sujet" name="user_message_subject">
            <option value="Chocolatine">Pain au chocolat vs chocolatine</option>
            <option value="Poche">Sac vs poche</option>
            <option value="Pégueux">Collant vs pégueux</option>
            <option value="Les Bordelais">Les Bordelais et leurs expressions</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
