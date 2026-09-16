<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<RecommenderFilter>|null $Filters
 * @property list<RecommenderPromotionalFilter>|null $PromotionalFilters
 */
class Recommender extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Filters?: list<RecommenderFilter>|null,
     *     PromotionalFilters?: list<RecommenderPromotionalFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
