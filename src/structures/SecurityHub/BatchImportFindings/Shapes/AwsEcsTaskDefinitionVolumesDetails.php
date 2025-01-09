<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails $DockerVolumeConfiguration
 * @property AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails $EfsVolumeConfiguration
 * @property AwsEcsTaskDefinitionVolumesHostDetails $Host
 * @property string $Name
 */
class AwsEcsTaskDefinitionVolumesDetails extends Shape
{
    /**
     * @param array{
     *     DockerVolumeConfiguration?: AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails,
     *     EfsVolumeConfiguration?: AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails,
     *     Host?: AwsEcsTaskDefinitionVolumesHostDetails,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
