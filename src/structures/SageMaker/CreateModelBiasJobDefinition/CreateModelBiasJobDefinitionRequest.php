<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelBiasJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\ModelBiasBaselineConfig $ModelBiasBaselineConfig
 * @property Shapes\ModelBiasAppSpecification $ModelBiasAppSpecification
 * @property Shapes\ModelBiasJobInput $ModelBiasJobInput
 * @property Shapes\MonitoringOutputConfig $ModelBiasJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelBiasJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     ModelBiasBaselineConfig?: Shapes\ModelBiasBaselineConfig,
     *     ModelBiasAppSpecification: Shapes\ModelBiasAppSpecification,
     *     ModelBiasJobInput: Shapes\ModelBiasJobInput,
     *     ModelBiasJobOutputConfig: Shapes\MonitoringOutputConfig,
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
