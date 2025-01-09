<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\DeviceDefinitionVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateDeviceDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\DeviceDefinitionVersion,
     *     Name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
