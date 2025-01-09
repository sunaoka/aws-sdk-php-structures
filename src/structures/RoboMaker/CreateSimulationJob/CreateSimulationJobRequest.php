<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property Shapes\OutputLocation $outputLocation
 * @property Shapes\LoggingConfig $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property string $iamRole
 * @property 'Fail'|'Continue' $failureBehavior
 * @property list<Shapes\RobotApplicationConfig> $robotApplications
 * @property list<Shapes\SimulationApplicationConfig> $simulationApplications
 * @property list<Shapes\DataSourceConfig> $dataSources
 * @property array<string, string> $tags
 * @property Shapes\VPCConfig $vpcConfig
 * @property Shapes\Compute $compute
 */
class CreateSimulationJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     outputLocation?: Shapes\OutputLocation,
     *     loggingConfig?: Shapes\LoggingConfig,
     *     maxJobDurationInSeconds: int,
     *     iamRole: string,
     *     failureBehavior?: 'Fail'|'Continue',
     *     robotApplications?: list<Shapes\RobotApplicationConfig>,
     *     simulationApplications?: list<Shapes\SimulationApplicationConfig>,
     *     dataSources?: list<Shapes\DataSourceConfig>,
     *     tags?: array<string, string>,
     *     vpcConfig?: Shapes\VPCConfig,
     *     compute?: Shapes\Compute
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
