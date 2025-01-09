<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 * @property Shapes\DataQualityBaselineConfig $DataQualityBaselineConfig
 * @property Shapes\DataQualityAppSpecification $DataQualityAppSpecification
 * @property Shapes\DataQualityJobInput $DataQualityJobInput
 * @property Shapes\MonitoringOutputConfig $DataQualityJobOutputConfig
 * @property Shapes\MonitoringResources $JobResources
 * @property Shapes\MonitoringNetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\MonitoringStoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 */
class CreateDataQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     JobDefinitionName: string,
     *     DataQualityBaselineConfig?: Shapes\DataQualityBaselineConfig,
     *     DataQualityAppSpecification: Shapes\DataQualityAppSpecification,
     *     DataQualityJobInput: Shapes\DataQualityJobInput,
     *     DataQualityJobOutputConfig: Shapes\MonitoringOutputConfig,
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
