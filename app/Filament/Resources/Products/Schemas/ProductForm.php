<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make()->schema([
                    TextInput::make('nama')
                        ->label('Nama produk')
                        ->required(),
                    TextInput::make('sku')
                        ->label('SKU')
                        ->unique()
                        ->required(),
                    TextInput::make('slug')
                        ->unique()
                        ->required(),
                    Textarea::make('description')
                        ->default(null)
                        ->columnSpanFull(),
                    TextInput::make('stock')
                        ->required()
                        ->numeric()
                        ->default(0),
                    TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('Rp'),
                    TextInput::make('weight')
                        ->required()
                        ->suffix('gram')
                        ->numeric()
                        ->default(0),
                ])


            ]);
    }
}
