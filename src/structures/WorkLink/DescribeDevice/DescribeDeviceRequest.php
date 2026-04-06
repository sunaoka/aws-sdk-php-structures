<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $DeviceId
 */
class DescribeDeviceRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
