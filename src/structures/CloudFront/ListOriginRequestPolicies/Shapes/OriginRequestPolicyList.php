<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginRequestPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<OriginRequestPolicySummary> $Items
 */
class OriginRequestPolicyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<OriginRequestPolicySummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
