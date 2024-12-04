<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BreakfastResource\Pages;
use App\Filament\Resources\BreakfastResource\RelationManagers;
use App\Models\Breakfast;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BreakfastResource extends Resource
{
    protected static ?string $model = Breakfast::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('menu')
                ->label('Nama Menu')
                ->required(),
                Forms\Components\RichEditor::make('bahan')
                ->label('Bahan Makanan')
                ->required(),
                Forms\Components\RichEditor::make('cara')
                ->label('Cara Membuat')
                ->required(),
                Forms\Components\FileUpload::make('foto')
                ->label('Foto Menu'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('menu')
                ->label('Nama Menu'),
                Tables\Columns\TextColumn::make('bahan')
                ->getStateUsing(fn ($record) => strip_tags($record->bahan)),
                Tables\Columns\TextColumn::make('cara')
                ->getStateUsing(fn ($record) => strip_tags($record->cara)),
                Tables\Columns\ImageColumn::make('foto')
                ->disk('public')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBreakfasts::route('/'),
            'create' => Pages\CreateBreakfast::route('/create'),
            'edit' => Pages\EditBreakfast::route('/{record}/edit'),
        ];
    }
}
