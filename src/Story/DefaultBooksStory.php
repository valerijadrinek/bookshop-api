<?php

namespace App\Story;

use Zenstruck\Foundry\Story;
use App\Factory\BookFactory;

final class DefaultBooksStory extends Story
{
    public function build(): void
    {
        BookFactory::createMany(25);
    }
}
