<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobDefinitionArn
 * @property string $JobDefinitionName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\ModelQualityBaselineConfig $ModelQualityBaselineConfig
 * @property Shapes\ModelQualityAppSpecification $ModelQualityAppSpecification
 * @property Shapes\ModelQualityJobInput $ModelQualityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition $StoppingCondition
 */
class DescribeModelQualityJobDefinitionResponse extends Response
{
}
