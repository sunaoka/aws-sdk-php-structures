<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelExplainabilityBaselineConfig|null $ModelExplainabilityBaselineConfig
 * @property Shapes\ModelExplainabilityAppSpecification $ModelExplainabilityAppSpecification
 * @property Shapes\ModelExplainabilityJobInput $ModelExplainabilityJobInput
 * @property Shapes\MonitoringOutputConfig $ModelExplainabilityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateModelExplainabilityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelExplainabilityBaselineConfig?: Shapes\ModelExplainabilityBaselineConfig|null,
     *     ModelExplainabilityAppSpecification: Shapes\ModelExplainabilityAppSpecification,
     *     ModelExplainabilityJobInput: Shapes\ModelExplainabilityJobInput,
     *     ModelExplainabilityJobOutputConfig: Shapes\MonitoringOutputConfig,
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
