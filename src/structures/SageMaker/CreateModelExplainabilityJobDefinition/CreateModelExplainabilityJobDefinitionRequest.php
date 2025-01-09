<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelExplainabilityBaselineConfig $ModelExplainabilityBaselineConfig
 * @property Shapes\ModelExplainabilityAppSpecification $ModelExplainabilityAppSpecification
 * @property Shapes\ModelExplainabilityJobInput $ModelExplainabilityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelExplainabilityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelExplainabilityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelExplainabilityBaselineConfig?: Shapes\ModelExplainabilityBaselineConfig,
     *     ModelExplainabilityAppSpecification: Shapes\ModelExplainabilityAppSpecification,
     *     ModelExplainabilityJobInput: Shapes\ModelExplainabilityJobInput,
     *     ModelExplainabilityJobOutputConfig: Shapes\MonitoringOutputConfig,
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
