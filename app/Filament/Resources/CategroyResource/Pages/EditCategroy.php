<?php

namespace App\Filament\Resources\CategroyResource\Pages;

use App\Filament\Resources\CategroyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategroy extends EditRecord
{
    protected static string $resource = CategroyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
