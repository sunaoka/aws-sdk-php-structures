<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $NetworkInterfaceId
 */
class InputDestinationVpc extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     NetworkInterfaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
