<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $DeviceDefinitionId
 * @property list<Shapes\Device> $Devices
 */
class CreateDeviceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     DeviceDefinitionId: string,
     *     Devices?: list<Shapes\Device>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
