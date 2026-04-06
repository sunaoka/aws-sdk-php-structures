<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsDetails>|null $ContainerDefinitions
 * @property string|null $Cpu
 * @property string|null $ExecutionRoleArn
 * @property string|null $Family
 * @property list<AwsEcsTaskDefinitionInferenceAcceleratorsDetails>|null $InferenceAccelerators
 * @property string|null $IpcMode
 * @property string|null $Memory
 * @property string|null $NetworkMode
 * @property string|null $PidMode
 * @property list<AwsEcsTaskDefinitionPlacementConstraintsDetails>|null $PlacementConstraints
 * @property AwsEcsTaskDefinitionProxyConfigurationDetails|null $ProxyConfiguration
 * @property list<string>|null $RequiresCompatibilities
 * @property string|null $TaskRoleArn
 * @property list<AwsEcsTaskDefinitionVolumesDetails>|null $Volumes
 * @property string|null $Status
 */
class AwsEcsTaskDefinitionDetails extends Shape
{
    /**
     * @param array{
     *     ContainerDefinitions?: list<AwsEcsTaskDefinitionContainerDefinitionsDetails>|null,
     *     Cpu?: string|null,
     *     ExecutionRoleArn?: string|null,
     *     Family?: string|null,
     *     InferenceAccelerators?: list<AwsEcsTaskDefinitionInferenceAcceleratorsDetails>|null,
     *     IpcMode?: string|null,
     *     Memory?: string|null,
     *     NetworkMode?: string|null,
     *     PidMode?: string|null,
     *     PlacementConstraints?: list<AwsEcsTaskDefinitionPlacementConstraintsDetails>|null,
     *     ProxyConfiguration?: AwsEcsTaskDefinitionProxyConfigurationDetails|null,
     *     RequiresCompatibilities?: list<string>|null,
     *     TaskRoleArn?: string|null,
     *     Volumes?: list<AwsEcsTaskDefinitionVolumesDetails>|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
