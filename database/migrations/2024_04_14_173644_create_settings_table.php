<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create(
            [
                'key'=>'_site_name',
                'label'=>'Judul Situs',
                'value'=>'Website Iven',
                'type'=>'_text',
            ]
            );
          
        setting::create(
            [
                'key'=>'_location',
                'label'=>'_Alamat Rumah',
                'value'=>'_Ibiroma, Jahukimo, Papua',
                'type'=>'_text',
            ]
            );
        setting::create(
            [
                'key'=>'_youtube',
                'label'=>'YouTube',
                'value'=>'http://www.youtube.com/@ivenlagowan.official',
                'type'=>'_text',
            ]
            );
          
        setting::create(
            [
                'key'=>'_instagram',
                'label'=>'Instagram',
                'value'=>'https://www.instagram.com/tupacopase/',
                'type'=>'_text',
            ]
            );
          
        setting::create(
            [
                'key'=>'_facebook',
                'label'=>'Facebook',
                'value'=>'https://www.facebook.com/twopac-opase',
                'type'=>'_text',
            ]
            );
          
        setting::create(
            [
                'key'=>'_linkedln',
                'label'=>'Linkedln',
                'value'=>'https://www.linkedin.com/in/iven-lagowan-iven-b0a8a6219/',
                'type'=>'_text',
            ]
            );
        setting::create(
            [
                'key'=>'_site_description',
                'label'=>'Website sederhana, dengan admin filament, bahan materi tutor',
                'value'=>'',
                'type'=>'_text',
            ]
            );
          
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
