<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property ContainerDefinition $PrimaryContainer
 * @property list<ContainerDefinition> $Containers
 * @property InferenceExecutionConfig $InferenceExecutionConfig
 * @property string $ExecutionRoleArn
 * @property VpcConfig $VpcConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ModelArn
 * @property bool $EnableNetworkIsolation
 * @property list<Tag> $Tags
 * @property DeploymentRecommendation $DeploymentRecommendation
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     PrimaryContainer?: ContainerDefinition,
     *     Containers?: list<ContainerDefinition>,
     *     InferenceExecutionConfig?: InferenceExecutionConfig,
     *     ExecutionRoleArn?: string,
     *     VpcConfig?: VpcConfig,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ModelArn?: string,
     *     EnableNetworkIsolation?: bool,
     *     Tags?: list<Tag>,
     *     DeploymentRecommendation?: DeploymentRecommendation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
