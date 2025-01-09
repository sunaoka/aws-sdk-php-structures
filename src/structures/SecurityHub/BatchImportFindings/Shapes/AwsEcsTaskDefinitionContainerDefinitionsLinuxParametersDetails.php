<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails $Capabilities
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails> $Devices
 * @property bool $InitProcessEnabled
 * @property int $MaxSwap
 * @property int $SharedMemorySize
 * @property int $Swappiness
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails> $Tmpfs
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails extends Shape
{
    /**
     * @param array{
     *     Capabilities?: AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails,
     *     Devices?: list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDevicesDetails>,
     *     InitProcessEnabled?: bool,
     *     MaxSwap?: int,
     *     SharedMemorySize?: int,
     *     Swappiness?: int,
     *     Tmpfs?: list<AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
