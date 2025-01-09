<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $name
 * @property string $arn
 * @property string $releaseLabel
 * @property string $type
 * @property 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED' $state
 * @property string $stateDetails
 * @property array<string, InitialCapacityConfig> $initialCapacity
 * @property MaximumAllowedResources $maximumCapacity
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string> $tags
 * @property AutoStartConfig $autoStartConfiguration
 * @property AutoStopConfig $autoStopConfiguration
 * @property NetworkConfiguration $networkConfiguration
 * @property 'ARM64'|'X86_64' $architecture
 * @property ImageConfiguration $imageConfiguration
 * @property array<string, WorkerTypeSpecification> $workerTypeSpecifications
 * @property list<Configuration> $runtimeConfiguration
 * @property MonitoringConfiguration $monitoringConfiguration
 * @property InteractiveConfiguration $interactiveConfiguration
 * @property SchedulerConfiguration $schedulerConfiguration
 */
class Application extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     name?: string,
     *     arn: string,
     *     releaseLabel: string,
     *     type: string,
     *     state: 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED',
     *     stateDetails?: string,
     *     initialCapacity?: array<string, InitialCapacityConfig>,
     *     maximumCapacity?: MaximumAllowedResources,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     autoStartConfiguration?: AutoStartConfig,
     *     autoStopConfiguration?: AutoStopConfig,
     *     networkConfiguration?: NetworkConfiguration,
     *     architecture?: 'ARM64'|'X86_64',
     *     imageConfiguration?: ImageConfiguration,
     *     workerTypeSpecifications?: array<string, WorkerTypeSpecification>,
     *     runtimeConfiguration?: list<Configuration>,
     *     monitoringConfiguration?: MonitoringConfiguration,
     *     interactiveConfiguration?: InteractiveConfiguration,
     *     schedulerConfiguration?: SchedulerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
