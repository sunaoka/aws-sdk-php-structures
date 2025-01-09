<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property Shapes\ContainerDefinition $PrimaryContainer
 * @property list<Shapes\ContainerDefinition> $Containers
 * @property Shapes\InferenceExecutionConfig $InferenceExecutionConfig
 * @property string $ExecutionRoleArn
 * @property Shapes\VpcConfig $VpcConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ModelArn
 * @property bool $EnableNetworkIsolation
 * @property Shapes\DeploymentRecommendation $DeploymentRecommendation
 */
class DescribeModelResponse extends Response
{
}
