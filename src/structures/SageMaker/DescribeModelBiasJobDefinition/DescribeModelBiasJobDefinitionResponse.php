<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelBiasJobDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobDefinitionArn
 * @property string $JobDefinitionName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\ModelBiasBaselineConfig|null $ModelBiasBaselineConfig
 * @property Shapes\ModelBiasAppSpecification $ModelBiasAppSpecification
 * @property Shapes\ModelBiasJobInput $ModelBiasJobInput
 * @property Shapes\MonitoringOutputConfig $ModelBiasJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 */
class DescribeModelBiasJobDefinitionResponse extends Response
{
}
