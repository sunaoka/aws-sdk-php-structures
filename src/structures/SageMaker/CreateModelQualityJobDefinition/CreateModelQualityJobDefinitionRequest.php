<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelQualityBaselineConfig|null $ModelQualityBaselineConfig
 * @property Shapes\ModelQualityAppSpecification $ModelQualityAppSpecification
 * @property Shapes\ModelQualityJobInput $ModelQualityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateModelQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelQualityBaselineConfig?: Shapes\ModelQualityBaselineConfig|null,
     *     ModelQualityAppSpecification: Shapes\ModelQualityAppSpecification,
     *     ModelQualityJobInput: Shapes\ModelQualityJobInput,
     *     ModelQualityJobOutputConfig: Shapes\MonitoringOutputConfig,
     *     JobResources: Shapes\MonitoringResources,
     *     NetworkConfig?: Shapes\MonitoringNetworkConfig|null,
     *     RoleArn: string,
     *     StoppingCondition?: Shapes\MonitoringStoppingCondition|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
