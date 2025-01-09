<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByResponseHeadersPolicyId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Marker
 * @property string $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 * @property list<string> $Items
 */
class DistributionIdList extends Shape
{
    /**
     * @param array{
     *     Marker: string,
     *     NextMarker?: string,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int,
     *     Items?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
