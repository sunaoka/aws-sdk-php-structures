<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails|null $Capabilities
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails>|null $Devices
 * @property bool|null $InitProcessEnabled
 * @property int|null $MaxSwap
 * @property int|null $SharedMemorySize
 * @property int|null $Swappiness
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails>|null $Tmpfs
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails extends Shape
{
    /**
     * @param array{
     *     Capabilities?: AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails|null,
     *     Devices?: list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails>|null,
     *     InitProcessEnabled?: bool|null,
     *     MaxSwap?: int|null,
     *     SharedMemorySize?: int|null,
     *     Swappiness?: int|null,
     *     Tmpfs?: list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
