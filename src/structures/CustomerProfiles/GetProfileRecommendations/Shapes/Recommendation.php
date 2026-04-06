<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CatalogItem|null $CatalogItem
 * @property double|null $Score
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     CatalogItem?: CatalogItem|null,
     *     Score?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
