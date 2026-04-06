<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property Shapes\OutputLocation|null $outputLocation
 * @property Shapes\LoggingConfig|null $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property string $iamRole
 * @property 'Fail'|'Continue'|null $failureBehavior
 * @property list<Shapes\RobotApplicationConfig>|null $robotApplications
 * @property list<Shapes\SimulationApplicationConfig>|null $simulationApplications
 * @property list<Shapes\DataSourceConfig>|null $dataSources
 * @property array<string, string>|null $tags
 * @property Shapes\VPCConfig|null $vpcConfig
 * @property Shapes\Compute|null $compute
 */
class CreateSimulationJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     outputLocation?: Shapes\OutputLocation|null,
     *     loggingConfig?: Shapes\LoggingConfig|null,
     *     maxJobDurationInSeconds: int,
     *     iamRole: string,
     *     failureBehavior?: 'Fail'|'Continue'|null,
     *     robotApplications?: list<Shapes\RobotApplicationConfig>|null,
     *     simulationApplications?: list<Shapes\SimulationApplicationConfig>|null,
     *     dataSources?: list<Shapes\DataSourceConfig>|null,
     *     tags?: array<string, string>|null,
     *     vpcConfig?: Shapes\VPCConfig|null,
     *     compute?: Shapes\Compute|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
