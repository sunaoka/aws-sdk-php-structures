<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocation|null $outputLocation
 * @property LoggingConfig|null $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property string|null $iamRole
 * @property 'Fail'|'Continue'|null $failureBehavior
 * @property bool|null $useDefaultApplications
 * @property list<RobotApplicationConfig>|null $robotApplications
 * @property list<SimulationApplicationConfig>|null $simulationApplications
 * @property list<DataSourceConfig>|null $dataSources
 * @property VPCConfig|null $vpcConfig
 * @property Compute|null $compute
 * @property array<string, string>|null $tags
 */
class SimulationJobRequest extends Shape
{
    /**
     * @param array{
     *     outputLocation?: OutputLocation|null,
     *     loggingConfig?: LoggingConfig|null,
     *     maxJobDurationInSeconds: int,
     *     iamRole?: string|null,
     *     failureBehavior?: 'Fail'|'Continue'|null,
     *     useDefaultApplications?: bool|null,
     *     robotApplications?: list<RobotApplicationConfig>|null,
     *     simulationApplications?: list<SimulationApplicationConfig>|null,
     *     dataSources?: list<DataSourceConfig>|null,
     *     vpcConfig?: VPCConfig|null,
     *     compute?: Compute|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
