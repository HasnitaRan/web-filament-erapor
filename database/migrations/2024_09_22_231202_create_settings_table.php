<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Erapor',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Sleman, Yogyakarta, Indonesia',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/@HazelnuttRan-th3su',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.youtube.com/@HazelnuttRan-th3su',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://www.youtube.com/@HazelnuttRan-th3su',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://www.youtube.com/@HazelnuttRan-th3su',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website Erapor untuk SMA/SMK',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
