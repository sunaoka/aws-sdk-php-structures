<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property ContainerDefinition|null $PrimaryContainer
 * @property list<ContainerDefinition>|null $Containers
 * @property InferenceExecutionConfig|null $InferenceExecutionConfig
 * @property string|null $ExecutionRoleArn
 * @property VpcConfig|null $VpcConfig
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ModelArn
 * @property bool|null $EnableNetworkIsolation
 * @property list<Tag>|null $Tags
 * @property DeploymentRecommendation|null $DeploymentRecommendation
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     PrimaryContainer?: ContainerDefinition|null,
     *     Containers?: list<ContainerDefinition>|null,
     *     InferenceExecutionConfig?: InferenceExecutionConfig|null,
     *     ExecutionRoleArn?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ModelArn?: string|null,
     *     EnableNetworkIsolation?: bool|null,
     *     Tags?: list<Tag>|null,
     *     DeploymentRecommendation?: DeploymentRecommendation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
