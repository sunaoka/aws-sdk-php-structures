<?php

namespace Sunaoka\Aws\Structures\SageMaker\RegisterDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property list<Shapes\Device> $Devices
 * @property list<Shapes\Tag> $Tags
 */
class RegisterDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     Devices: list<Shapes\Device>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
