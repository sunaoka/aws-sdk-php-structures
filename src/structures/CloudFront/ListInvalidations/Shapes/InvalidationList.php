<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Marker
 * @property string $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 * @property list<InvalidationSummary> $Items
 */
class InvalidationList extends Shape
{
    /**
     * @param array{
     *     Marker: string,
     *     NextMarker?: string,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int,
     *     Items?: list<InvalidationSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
