<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 10 users using the user factory
        factory(App\User::class, 10)->create();

        factory(App\Models\Person::class, 10)->create();

        factory(App\Models\Veterinary::class, 10)->create();

        factory(App\Models\Animal::class, 10)->create();

        factory(App\Models\Product::class, 10)->create();

        factory(App\Models\BankAccount::class, 10)->create();

        factory(App\Models\AccountTransaction::class, 100)->create();
    }
}
