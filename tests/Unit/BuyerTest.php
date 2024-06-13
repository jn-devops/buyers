<?php

use Homeful\Buyers\Models\Buyer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

uses(RefreshDatabase::class, WithFaker::class);

beforeEach(function () {
    $this->faker = $this->makeFaker('en_PH');
});

test('buyer has attributes', function () {
    $buyer = Buyer::factory()->create();
    expect($buyer->reference_code)->toBeString();
    expect($buyer->rating)->toBeString();
    expect($buyer->paid)->toBeTrue();
});
