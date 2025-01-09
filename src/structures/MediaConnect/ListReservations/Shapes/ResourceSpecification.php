<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReservedBitrate
 * @property 'Mbps_Outbound_Bandwidth' $ResourceType
 */
class ResourceSpecification extends Shape
{
    /**
     * @param array{
     *     ReservedBitrate?: int,
     *     ResourceType: 'Mbps_Outbound_Bandwidth'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
