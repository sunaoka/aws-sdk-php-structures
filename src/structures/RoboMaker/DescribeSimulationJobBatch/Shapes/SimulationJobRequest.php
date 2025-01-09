<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocation $outputLocation
 * @property LoggingConfig $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property string $iamRole
 * @property 'Fail'|'Continue' $failureBehavior
 * @property bool $useDefaultApplications
 * @property list<RobotApplicationConfig> $robotApplications
 * @property list<SimulationApplicationConfig> $simulationApplications
 * @property list<DataSourceConfig> $dataSources
 * @property VPCConfig $vpcConfig
 * @property Compute $compute
 * @property array<string, string> $tags
 */
class SimulationJobRequest extends Shape
{
    /**
     * @param array{
     *     outputLocation?: OutputLocation,
     *     loggingConfig?: LoggingConfig,
     *     maxJobDurationInSeconds: int,
     *     iamRole?: string,
     *     failureBehavior?: 'Fail'|'Continue',
     *     useDefaultApplications?: bool,
     *     robotApplications?: list<RobotApplicationConfig>,
     *     simulationApplications?: list<SimulationApplicationConfig>,
     *     dataSources?: list<DataSourceConfig>,
     *     vpcConfig?: VPCConfig,
     *     compute?: Compute,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
