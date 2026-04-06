<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeviceInfo|null $DeviceInfo
 * @property ParticipantCapabilities|null $Capabilities
 */
class Customer extends Shape
{
    /**
     * @param array{
     *     DeviceInfo?: DeviceInfo|null,
     *     Capabilities?: ParticipantCapabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
