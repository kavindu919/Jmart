<?php

namespace App\Filament\Resources\CategroyResource\Pages;

use App\Filament\Resources\CategroyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategroys extends ListRecords
{
    protected static string $resource = CategroyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
