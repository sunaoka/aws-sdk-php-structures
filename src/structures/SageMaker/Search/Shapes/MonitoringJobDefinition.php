<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringBaselineConfig $BaselineConfig
 * @property list<MonitoringInput> $MonitoringInputs
 * @property MonitoringOutputConfig $MonitoringOutputConfig
 * @property MonitoringResources $MonitoringResources
 * @property MonitoringAppSpecification $MonitoringAppSpecification
 * @property MonitoringStoppingCondition $StoppingCondition
 * @property array<string, string> $Environment
 * @property NetworkConfig $NetworkConfig
 * @property string $RoleArn
 */
class MonitoringJobDefinition extends Shape
{
    /**
     * @param array{
     *     BaselineConfig?: MonitoringBaselineConfig,
     *     MonitoringInputs: list<MonitoringInput>,
     *     MonitoringOutputConfig: MonitoringOutputConfig,
     *     MonitoringResources: MonitoringResources,
     *     MonitoringAppSpecification: MonitoringAppSpecification,
     *     StoppingCondition?: MonitoringStoppingCondition,
     *     Environment?: array<string, string>,
     *     NetworkConfig?: NetworkConfig,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
