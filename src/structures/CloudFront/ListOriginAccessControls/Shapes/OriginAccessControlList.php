<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginAccessControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Marker
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 * @property list<OriginAccessControlSummary>|null $Items
 */
class OriginAccessControlList extends Shape
{
    /**
     * @param array{
     *     Marker: string,
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int,
     *     Items?: list<OriginAccessControlSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
