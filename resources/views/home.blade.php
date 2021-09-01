@extends('layouts.entete')

@section('content')
<div class="container">
    <div class="row justify-content-center">






                        <div class="col-4 my-3">
                            <div class="col-12 my-3">
                                <form action="" method="get">
                                    <button type="submit" class="btn btn-xs btn-info">Messages</button>
                                </form>
                            </div>
                            <div class="col-12 my-3">
                                <form action="{{route('chatter')}}" method="get">
                                    <button type="submit" class="btn btn-xs btn-info">Chatter</button>
                                </form>
                            </div>
                            <div class="col-12 my-3">
                                <form action="" method="get">
                                    <button type="submit" class="btn btn-xs btn-info">forum</button>
                                </form>
                            </div>

                        </div>
                      <div class="col-8 bg-white ">
                         <h2> </h2>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Liste des clients ayant un compte</li>
                    </ol>
                </nav>
                <div class="container-fluid">

                  
                </div>
                </div>

    </div>
</div>
@endsection

