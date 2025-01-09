<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedDeviceId
 */
class DescribeDeviceRequest extends Request
{
    /**
     * @param array{managedDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
