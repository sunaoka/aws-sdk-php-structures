<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property Shapes\ContainerDefinition|null $PrimaryContainer
 * @property list<Shapes\ContainerDefinition>|null $Containers
 * @property Shapes\InferenceExecutionConfig|null $InferenceExecutionConfig
 * @property string|null $ExecutionRoleArn
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ModelArn
 * @property bool|null $EnableNetworkIsolation
 * @property Shapes\DeploymentRecommendation|null $DeploymentRecommendation
 */
class DescribeModelResponse extends Response
{
}
