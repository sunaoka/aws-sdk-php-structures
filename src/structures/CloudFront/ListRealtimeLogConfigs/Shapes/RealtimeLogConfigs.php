<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListRealtimeLogConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxItems
 * @property list<RealtimeLogConfig> $Items
 * @property bool $IsTruncated
 * @property string $Marker
 * @property string $NextMarker
 */
class RealtimeLogConfigs extends Shape
{
    /**
     * @param array{
     *     MaxItems: int,
     *     Items?: list<RealtimeLogConfig>,
     *     IsTruncated: bool,
     *     Marker: string,
     *     NextMarker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
