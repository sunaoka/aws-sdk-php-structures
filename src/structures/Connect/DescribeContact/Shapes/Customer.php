<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceInfo $DeviceInfo
 * @property ParticipantCapabilities $Capabilities
 */
class Customer extends Shape
{
    /**
     * @param array{
     *     DeviceInfo?: DeviceInfo,
     *     Capabilities?: ParticipantCapabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
