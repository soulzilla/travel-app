<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenApi\Generator;

class GenerateSwaggerDocs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Swagger JSON documentation';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $openapi = Generator::scan([app_path('Http/Controllers')]);
        file_put_contents(public_path('swagger.json'), $openapi->toJson());

        $this->info('Swagger JSON documentation generated successfully.');
    }
}
