<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails|null $DockerVolumeConfiguration
 * @property AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails|null $EfsVolumeConfiguration
 * @property AwsEcsTaskDefinitionVolumesHostDetails|null $Host
 * @property string|null $Name
 */
class AwsEcsTaskDefinitionVolumesDetails extends Shape
{
    /**
     * @param array{
     *     DockerVolumeConfiguration?: AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails|null,
     *     EfsVolumeConfiguration?: AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails|null,
     *     Host?: AwsEcsTaskDefinitionVolumesHostDetails|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
