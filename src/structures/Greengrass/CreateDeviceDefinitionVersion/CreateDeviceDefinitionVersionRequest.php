<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $DeviceDefinitionId
 * @property list<Shapes\Device>|null $Devices
 */
class CreateDeviceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     DeviceDefinitionId: string,
     *     Devices?: list<Shapes\Device>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
