<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BookReservationTest extends TestCase
{
   public function a_book_can_added_to_a_library()
   {
       $response = $this->post('/books', [
            'title' => 'Book title',
            'author' => 'Innocent',
        ]);
        $response->assertOk();

        $this->assertCount(1, Book::all());

   }
}
