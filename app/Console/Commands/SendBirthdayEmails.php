<?php

namespace App\Console\Commands;

use App\Mail\BirthdayEmail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBirthdayEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:birthday-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send birthday emails to users.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Obtener los usuarios que cumplen años
        $users = User::whereMonth('birthday', Carbon::today()->month)
            ->whereDay('birthday', Carbon::today()->day)
            ->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new BirthdayEmail($user));
        }
    }
}
