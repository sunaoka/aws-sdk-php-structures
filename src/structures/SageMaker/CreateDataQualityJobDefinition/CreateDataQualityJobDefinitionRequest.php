<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\DataQualityBaselineConfig|null $DataQualityBaselineConfig
 * @property Shapes\DataQualityAppSpecification $DataQualityAppSpecification
 * @property Shapes\DataQualityJobInput $DataQualityJobInput
 * @property Shapes\MonitoringOutputConfig $DataQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition|null $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDataQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     DataQualityBaselineConfig?: Shapes\DataQualityBaselineConfig|null,
     *     DataQualityAppSpecification: Shapes\DataQualityAppSpecification,
     *     DataQualityJobInput: Shapes\DataQualityJobInput,
     *     DataQualityJobOutputConfig: Shapes\MonitoringOutputConfig,
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
