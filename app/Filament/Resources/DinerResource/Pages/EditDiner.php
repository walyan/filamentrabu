<?php

namespace App\Filament\Resources\DinerResource\Pages;

use App\Filament\Resources\DinerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiner extends EditRecord
{
    protected static string $resource = DinerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
