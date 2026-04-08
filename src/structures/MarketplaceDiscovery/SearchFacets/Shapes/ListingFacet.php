<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchFacets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string $displayName
 * @property string|null $parent
 * @property int<0, max> $count
 */
class ListingFacet extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     displayName: string,
     *     parent?: string|null,
     *     count: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
