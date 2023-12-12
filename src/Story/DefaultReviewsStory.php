<?php

namespace App\Story;

use Zenstruck\Foundry\Story;
use App\Factory\ReviewFactory;

use function Zenstruck\Foundry\create_many;

final class DefaultReviewsStory extends Story
{
    public function build(): void
    {
        ReviewFactory::createMany(65);
    }
}
