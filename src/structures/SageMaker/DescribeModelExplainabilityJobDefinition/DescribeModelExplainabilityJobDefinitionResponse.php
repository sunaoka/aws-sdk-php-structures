<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelExplainabilityJobDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobDefinitionArn
 * @property string $JobDefinitionName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\ModelExplainabilityBaselineConfig|null $ModelExplainabilityBaselineConfig
 * @property Shapes\ModelExplainabilityAppSpecification $ModelExplainabilityAppSpecification
 * @property Shapes\ModelExplainabilityJobInput $ModelExplainabilityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelExplainabilityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 */
class DescribeModelExplainabilityJobDefinitionResponse extends Response
{
}
