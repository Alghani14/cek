<?php

namespace App\Http\Livewire;

use App\Models\Aktivitas;
use Livewire\Component;

class AktivitasForm extends Component
{
    public $permission;
    public $attendanceId;

    protected $rules = [
        'permission.aktivitas' => 'required|string|min:6',
    ];

    public function save()
    {
        $this->validate();

        Aktivitas::create([
            "user_id" => auth()->user()->id,
            "attendance_id" => $this->attendanceId,
            "aktivitas" => $this->permission['aktivitas'],
            "permission_date" => now()->toDateString()
        ]);

        return redirect()->route('home.show', $this->attendanceId)->with('success', 'Permintaan izin sedang diproses. Silahkan tunggu...');
    }

    public function render()
    {
        return view('livewire.aktivitas-form');
    }
}
