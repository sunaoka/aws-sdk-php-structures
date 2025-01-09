<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeviceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 */
class GetDeviceDefinitionRequest extends Request
{
    /**
     * @param array{DeviceDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
