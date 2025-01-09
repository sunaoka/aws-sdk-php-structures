<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelQualityBaselineConfig $ModelQualityBaselineConfig
 * @property Shapes\ModelQualityAppSpecification $ModelQualityAppSpecification
 * @property Shapes\ModelQualityJobInput $ModelQualityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelQualityBaselineConfig?: Shapes\ModelQualityBaselineConfig,
     *     ModelQualityAppSpecification: Shapes\ModelQualityAppSpecification,
     *     ModelQualityJobInput: Shapes\ModelQualityJobInput,
     *     ModelQualityJobOutputConfig: Shapes\MonitoringOutputConfig,
     *     JobResources: Shapes\MonitoringResources,
     *     NetworkConfig?: Shapes\MonitoringNetworkConfig,
     *     RoleArn: string,
     *     StoppingCondition?: Shapes\MonitoringStoppingCondition,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
