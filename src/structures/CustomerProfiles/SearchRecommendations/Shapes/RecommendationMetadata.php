<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Columns
 */
class RecommendationMetadata extends Shape
{
    /**
     * @param array{Columns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
