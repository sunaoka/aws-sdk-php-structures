<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $score
 * @property ProfileCatalogItem|null $catalogItem
 */
class ProfileRecommendation extends Shape
{
    /**
     * @param array{
     *     score?: double|null,
     *     catalogItem?: ProfileCatalogItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
