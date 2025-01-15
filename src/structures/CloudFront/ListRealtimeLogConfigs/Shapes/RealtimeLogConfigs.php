<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListRealtimeLogConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxItems
 * @property list<RealtimeLogConfig>|null $Items
 * @property bool $IsTruncated
 * @property string $Marker
 * @property string|null $NextMarker
 */
class RealtimeLogConfigs extends Shape
{
    /**
     * @param array{
     *     MaxItems: int,
     *     Items?: list<RealtimeLogConfig>|null,
     *     IsTruncated: bool,
     *     Marker: string,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
