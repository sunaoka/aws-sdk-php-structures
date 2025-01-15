<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnycastIpListSummary>|null $Items
 * @property string $Marker
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 */
class AnycastIpListCollection extends Shape
{
    /**
     * @param array{
     *     Items?: list<AnycastIpListSummary>|null,
     *     Marker: string,
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
