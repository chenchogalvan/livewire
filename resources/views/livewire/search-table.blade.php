<div>
    <div class="py-5 text-center">
        <h1 class="display-5 fw-bold">{{ $title }}</h1>
        <div class="col-lg-12 mx-auto">
            <p class="lead mb-4">{{$descriptionPage}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="Searh a City, State, State code or country" wire:model='search'>
            </div>
        </div>
        <div class="col-md-3">
            <select class="form-select" aria-label="Default select example" wire:model='paginateCount'>
                <option value="" selected>Pagination Count</option>
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="90">90</option>
                <option value="120">120</option>
            </select>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">City Name</th>
                    <th scope="col">State</th>
                    <th scope="col">State Code</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <th scope="row">{{ $city->id }} - {{ $city->name }}</th>
                        <td>{{ $city->state->name }}</td>
                        <td>{{ $city->state->code }}</td>
                        <td>{{ $city->state->country->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="row">
        {{ $cities->links() }}
    </div>
</div>
