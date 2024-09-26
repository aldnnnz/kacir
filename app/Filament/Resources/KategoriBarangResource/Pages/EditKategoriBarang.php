<?php

namespace App\Filament\Resources\KategoriBarangResource\Pages;

use App\Filament\Resources\KategoriBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBarang extends EditRecord
{
    protected static string $resource = KategoriBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
