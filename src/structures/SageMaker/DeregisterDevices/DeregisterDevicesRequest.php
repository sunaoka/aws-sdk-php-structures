<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeregisterDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property list<string> $DeviceNames
 */
class DeregisterDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     DeviceNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
