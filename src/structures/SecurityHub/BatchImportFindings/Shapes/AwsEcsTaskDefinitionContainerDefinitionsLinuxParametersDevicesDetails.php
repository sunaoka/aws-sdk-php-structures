<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerPath
 * @property string|null $HostPath
 * @property list<string>|null $Permissions
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string|null,
     *     HostPath?: string|null,
     *     Permissions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
