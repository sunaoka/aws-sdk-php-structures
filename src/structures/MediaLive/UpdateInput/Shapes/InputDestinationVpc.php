<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $NetworkInterfaceId
 */
class InputDestinationVpc extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     NetworkInterfaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
