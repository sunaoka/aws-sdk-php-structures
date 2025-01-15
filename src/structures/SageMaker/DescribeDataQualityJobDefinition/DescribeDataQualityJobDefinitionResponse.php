<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDataQualityJobDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobDefinitionArn
 * @property string $JobDefinitionName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\DataQualityBaselineConfig|null $DataQualityBaselineConfig
 * @property Shapes\DataQualityAppSpecification $DataQualityAppSpecification
 * @property Shapes\DataQualityJobInput $DataQualityJobInput
 * @property Shapes\MonitoringOutputConfig $DataQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 */
class DescribeDataQualityJobDefinitionResponse extends Response
{
}
