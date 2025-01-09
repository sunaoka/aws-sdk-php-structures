<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 */
class DeleteDeviceFleetRequest extends Request
{
    /**
     * @param array{DeviceFleetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
