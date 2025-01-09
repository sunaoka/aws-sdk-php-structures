<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteDeviceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 */
class DeleteDeviceDefinitionRequest extends Request
{
    /**
     * @param array{DeviceDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
