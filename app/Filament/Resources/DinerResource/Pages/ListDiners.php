<?php

namespace App\Filament\Resources\DinerResource\Pages;

use App\Filament\Resources\DinerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiners extends ListRecords
{
    protected static string $resource = DinerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
