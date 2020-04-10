
@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Test Page</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Title of panel goes here</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <section>
                        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">"user_name:"{{ $order->user ? $order->user->name : 'not exist'}}</h5>
          <p class="card-text">{{$order->doctor_id}}</p>
          <p class="card-text">{{$order->is_isured}}</p>
          <p class="card-text">{{$order->creator_type}}</p>
          <p class="card-text">{{$order->status}}</p>
          <p class="card-text">{{$order->pharmacy_id}}</p>
          @foreach($order->medicines as $medicine)
            <p class="card-text">{{$medicine->name}}</p>
            <p class="card-text">{{$medicine->price}}</p>
          @endforeach
        
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
        
        </div>
      </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection


  
