@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-6 columns">
        <h4>Reservations</h4>
        
      </div>
      <table class="stack">
          <thead>
            <tr>
              <th width="150">Date IN</th>
              <th width="150">Date OUT</th>
              <th width="150">Client ID</th>
              <th width="150">Room ID</th>
            </tr>
          </thead>
          <tbody>

          @foreach( $reservation as $reserve )
              <tr>
                <td>{{ $reserve->date_in }}</td>
                <td>{{ $reserve->date_out }}</td>
                <td>{{ $reserve->client_id }}</td>
                <td>{{ $reserve->room_id }}</td>
              </tr>
          @endforeach

              
                      </tbody>
        </table>
    </div>
@endsection