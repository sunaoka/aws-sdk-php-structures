<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property list<Shapes\Device> $Devices
 */
class UpdateDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     Devices: list<Shapes\Device>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
