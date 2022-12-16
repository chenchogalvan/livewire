<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class SearchTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $paginateCount, $title, $descriptionPage;


    public function render()
    {
        $paginate = $this->paginateCount == null ? 30 : $this->paginateCount;
        return view('livewire.search-table', [
            'cities' => City::with(['state', 'state.country'])
                            ->where('name', 'like', '%'.$this->search.'%')
                            ->orWhereRelation('state', 'name', 'like', '%'.$this->search.'%')->paginate($paginate)
        ]);
    }
}
