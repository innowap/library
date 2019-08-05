<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BookReservationTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
   public function testBook()
   {
       $this->withoutExceptionHandling();

       $response = $this->post('/books', [
            'title' => 'Book title',
            'author' => 'Innocent',
        ]);
        $response->assertOk();

        $this->assertCount(1, Book::all());

   }
    /** @test */
   public function testTitle()
   {
       $this->withoutExceptionHandling();

       $response = $this->post('/books', [
            'title' => 'Book title',
            'author' => '',
        ]);
        $response->assertOk();

        $this->assertCount(1, Book::all());

   }
    /** @test */
   public function testUpdate()
   {
       $this->withoutExceptionHandling();

       $response = $this->post('/books', [
            'title' => 'Book title',
            'author' => '',
        ]);
        $response->assertOk();

        $this->assertCount(1, Book::all());

   }

}
