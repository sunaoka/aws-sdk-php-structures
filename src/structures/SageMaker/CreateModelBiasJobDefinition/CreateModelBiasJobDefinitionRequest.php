<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelBiasJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelBiasBaselineConfig|null $ModelBiasBaselineConfig
 * @property Shapes\ModelBiasAppSpecification $ModelBiasAppSpecification
 * @property Shapes\ModelBiasJobInput $ModelBiasJobInput
 * @property Shapes\MonitoringOutputConfig $ModelBiasJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateModelBiasJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelBiasBaselineConfig?: Shapes\ModelBiasBaselineConfig|null,
     *     ModelBiasAppSpecification: Shapes\ModelBiasAppSpecification,
     *     ModelBiasJobInput: Shapes\ModelBiasJobInput,
     *     ModelBiasJobOutputConfig: Shapes\MonitoringOutputConfig,
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
