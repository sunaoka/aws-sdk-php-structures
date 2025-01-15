<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string $DeviceName
 * @property string $DeviceFleetName
 */
class DescribeDeviceRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     DeviceName: string,
     *     DeviceFleetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
