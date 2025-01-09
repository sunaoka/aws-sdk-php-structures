<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerPath
 * @property string $HostPath
 * @property list<string> $Permissions
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string,
     *     HostPath?: string,
     *     Permissions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
