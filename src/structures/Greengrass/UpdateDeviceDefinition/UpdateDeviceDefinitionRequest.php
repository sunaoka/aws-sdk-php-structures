<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateDeviceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 * @property string|null $Name
 */
class UpdateDeviceDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DeviceDefinitionId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
