<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 */
class DescribeDeviceFleetRequest extends Request
{
    /**
     * @param array{DeviceFleetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
