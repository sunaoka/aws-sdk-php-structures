<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringBaselineConfig|null $BaselineConfig
 * @property list<MonitoringInput> $MonitoringInputs
 * @property MonitoringOutputConfig $MonitoringOutputConfig
 * @property MonitoringResources $MonitoringResources
 * @property MonitoringAppSpecification $MonitoringAppSpecification
 * @property MonitoringStoppingCondition|null $StoppingCondition
 * @property array<string, string>|null $Environment
 * @property NetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 */
class MonitoringJobDefinition extends Shape
{
    /**
     * @param array{
     *     BaselineConfig?: MonitoringBaselineConfig|null,
     *     MonitoringInputs: list<MonitoringInput>,
     *     MonitoringOutputConfig: MonitoringOutputConfig,
     *     MonitoringResources: MonitoringResources,
     *     MonitoringAppSpecification: MonitoringAppSpecification,
     *     StoppingCondition?: MonitoringStoppingCondition|null,
     *     Environment?: array<string, string>|null,
     *     NetworkConfig?: NetworkConfig|null,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
