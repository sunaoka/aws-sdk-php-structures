<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $categoryId
 * @property string $displayName
 */
class Category extends Shape
{
    /**
     * @param array{
     *     categoryId: string,
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
