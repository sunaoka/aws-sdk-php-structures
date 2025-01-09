<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListStreamingDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Marker
 * @property string $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 * @property list<StreamingDistributionSummary> $Items
 */
class StreamingDistributionList extends Shape
{
    /**
     * @param array{
     *     Marker: string,
     *     NextMarker?: string,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int,
     *     Items?: list<StreamingDistributionSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
