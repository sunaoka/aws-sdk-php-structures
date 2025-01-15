<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginRequestPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<OriginRequestPolicySummary>|null $Items
 */
class OriginRequestPolicyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<OriginRequestPolicySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
