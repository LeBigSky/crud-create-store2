<section>
<a href="{{ route('crea') }}">Vers inscriptions</a>
    <h1>Tous Vos etudiants : {{ $total }}</h1>
    <section>
        <div class="container d-flex justify-content-center gap-3">
            @foreach ($etudiants as $etudiant)
            @if ($etudiant->age >= 22 && $etudiant->age < 25 )
            <div class="card" style="width: 18rem;">
                <div class="card-body bg-primary">
                  <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
                  <p class="card-text">{{ $etudiant['genre'] }} </p>
                  <p class="card-text">{{ $etudiant['age'] }} </p>
                  <p href="#" class="btn btn-light">{{ $etudiant['email'] }}</p>
                </div>
              </div>
            @elseif ($etudiant->age >= 25)
                <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color: purple; color:white">
                  <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
                  <p class="card-text">{{ $etudiant['genre'] }} </p>
                  <p class="card-text">{{ $etudiant['age'] }} </p>
                  <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
                </div>
              </div>   
              @else
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
                  <p class="card-text">{{ $etudiant['genre'] }} </p>
                  <p class="card-text">{{ $etudiant['age'] }} </p>
                  <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
                </div>
                @endif
             @endforeach
    </div>   
    </section>
<hr>
<section>
    <h1>Etudiants féminin</h1>
    <div class="container d-flex justify-content-center">
        @foreach ($femmes as $etudiant)
        @if ($etudiant->age >= 22 && $etudiant->age < 25 )
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-primary">
              <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
              <p class="card-text">{{ $etudiant['genre'] }} </p>
              <p class="card-text">{{ $etudiant['age'] }} </p>
              <p href="#" class="btn btn-light">{{ $etudiant['email'] }}</p>
            </div>
          </div>
        @elseif ($etudiant->age >= 25)
            <div class="card" style="width: 18rem;">
            <div class="card-body" style="background-color: purple; color:white;">
              <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
              <p class="card-text">{{ $etudiant['genre'] }} </p>
              <p class="card-text">{{ $etudiant['age'] }} </p>
              <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
            </div>
          </div>   
          @else
            <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
              <p class="card-text">{{ $etudiant['genre'] }} </p>
              <p class="card-text">{{ $etudiant['age'] }} </p>
              <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
            </div>
            @endif
         @endforeach
    </div>
</section>
<hr>
<h1>Etudiants Masculin</h1>
<section>
    <div class="container d-flex justify-content-center">
@foreach ($hommes as $etudiant)
@if ($etudiant->age >= 22 && $etudiant->age < 25 )
<div class="card" style="width: 18rem;">
    <div class="card-body bg-primary">
      <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
      <p class="card-text">{{ $etudiant['genre'] }} </p>
      <p class="card-text">{{ $etudiant['age'] }} </p>
      <p href="#" class="btn btn-light">{{ $etudiant['email'] }}</p>
    </div>
  </div>
@elseif ($etudiant->age >= 25)
    <div class="card" style="width: 18rem;">
    <div class="card-body" style="background-color: purple; color:white;">
      <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
      <p class="card-text">{{ $etudiant['genre'] }} </p>
      <p class="card-text">{{ $etudiant['age'] }} </p>
      <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
    </div>
  </div>   
  @else
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $etudiant['nom'] }}</h5>
      <p class="card-text">{{ $etudiant['genre'] }} </p>
      <p class="card-text">{{ $etudiant['age'] }} </p>
      <p href="#" class="btn btn-primary">{{ $etudiant['email'] }}</p>
    </div>
    @endif
 @endforeach
</div>
</section>




</section>