<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<ResponseHeadersPolicySummary>|null $Items
 */
class ResponseHeadersPolicyList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
