<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<ResponseHeadersPolicySummary> $Items
 */
class ResponseHeadersPolicyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicySummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
