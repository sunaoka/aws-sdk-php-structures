<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now'|null $name
 * @property string|null $description
 */
class RecommenderRecipe extends Shape
{
    /**
     * @param array{
     *     name?: 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
