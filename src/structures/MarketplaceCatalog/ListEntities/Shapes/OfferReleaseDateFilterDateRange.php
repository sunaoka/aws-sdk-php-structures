<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AfterValue
 * @property string $BeforeValue
 */
class OfferReleaseDateFilterDateRange extends Shape
{
    /**
     * @param array{
     *     AfterValue?: string,
     *     BeforeValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
