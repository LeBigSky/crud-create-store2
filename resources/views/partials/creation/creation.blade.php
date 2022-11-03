<section>
    <h1> ajouter des étudiants</h1>
        <div class="container d-flex justify-content-center gap-2">
            
            <form class="d-flex gap-2" action="{{ route('store.etudiant') }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="genre">Genre</label>
                <select name="genre" id="genre">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Féminin</option>
                </select>
    
            </div>
            <div>
                <label for="age">age</label>
                <input type="number" name="age" id="age">
            </div>
            <div>
                <label for="email">Mail</label>
                <input type="text" name="email" id="email">
            </div>
            <button type="submit">Ajouter étudiant</button> 
            </form>
    </div>
    </section>