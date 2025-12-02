<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\QueueManagementService;
use App\Services\NurseAssignmentService;
use App\Services\CheckInValidationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ✅ Queue Management Service
        $this->app->singleton(QueueManagementService::class, function ($app) {
            return new QueueManagementService();
        });

        // ✅ Nurse Assignment Service
        $this->app->singleton(NurseAssignmentService::class, function ($app) {
            return new NurseAssignmentService();
        });

        // ✅ Check-In Validation Service
        $this->app->singleton(CheckInValidationService::class, function ($app) {
            return new CheckInValidationService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}