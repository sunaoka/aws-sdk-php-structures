<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCachePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<CachePolicySummary>|null $Items
 */
class CachePolicyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<CachePolicySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
