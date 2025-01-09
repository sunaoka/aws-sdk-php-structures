<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsDetails> $ContainerDefinitions
 * @property string $Cpu
 * @property string $ExecutionRoleArn
 * @property string $Family
 * @property list<AwsEcsTaskDefinitionInferenceAcceleratorsDetails> $InferenceAccelerators
 * @property string $IpcMode
 * @property string $Memory
 * @property string $NetworkMode
 * @property string $PidMode
 * @property list<AwsEcsTaskDefinitionPlacementConstraintsDetails> $PlacementConstraints
 * @property AwsEcsTaskDefinitionProxyConfigurationDetails $ProxyConfiguration
 * @property list<string> $RequiresCompatibilities
 * @property string $TaskRoleArn
 * @property list<AwsEcsTaskDefinitionVolumesDetails> $Volumes
 * @property string $Status
 */
class AwsEcsTaskDefinitionDetails extends Shape
{
    /**
     * @param array{
     *     ContainerDefinitions?: list<AwsEcsTaskDefinitionContainerDefinitionsDetails>,
     *     Cpu?: string,
     *     ExecutionRoleArn?: string,
     *     Family?: string,
     *     InferenceAccelerators?: list<AwsEcsTaskDefinitionInferenceAcceleratorsDetails>,
     *     IpcMode?: string,
     *     Memory?: string,
     *     NetworkMode?: string,
     *     PidMode?: string,
     *     PlacementConstraints?: list<AwsEcsTaskDefinitionPlacementConstraintsDetails>,
     *     ProxyConfiguration?: AwsEcsTaskDefinitionProxyConfigurationDetails,
     *     RequiresCompatibilities?: list<string>,
     *     TaskRoleArn?: string,
     *     Volumes?: list<AwsEcsTaskDefinitionVolumesDetails>,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
