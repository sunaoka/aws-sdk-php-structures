<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string|null $name
 * @property string $arn
 * @property string $releaseLabel
 * @property string $type
 * @property 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED' $state
 * @property string|null $stateDetails
 * @property array<string, InitialCapacityConfig>|null $initialCapacity
 * @property MaximumAllowedResources|null $maximumCapacity
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 * @property AutoStartConfig|null $autoStartConfiguration
 * @property AutoStopConfig|null $autoStopConfiguration
 * @property NetworkConfiguration|null $networkConfiguration
 * @property 'ARM64'|'X86_64'|null $architecture
 * @property ImageConfiguration|null $imageConfiguration
 * @property array<string, WorkerTypeSpecification>|null $workerTypeSpecifications
 * @property list<Configuration>|null $runtimeConfiguration
 * @property MonitoringConfiguration|null $monitoringConfiguration
 * @property InteractiveConfiguration|null $interactiveConfiguration
 * @property SchedulerConfiguration|null $schedulerConfiguration
 */
class Application extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     name?: string|null,
     *     arn: string,
     *     releaseLabel: string,
     *     type: string,
     *     state: 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED',
     *     stateDetails?: string|null,
     *     initialCapacity?: array<string, InitialCapacityConfig>|null,
     *     maximumCapacity?: MaximumAllowedResources|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null,
     *     autoStartConfiguration?: AutoStartConfig|null,
     *     autoStopConfiguration?: AutoStopConfig|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     architecture?: 'ARM64'|'X86_64'|null,
     *     imageConfiguration?: ImageConfiguration|null,
     *     workerTypeSpecifications?: array<string, WorkerTypeSpecification>|null,
     *     runtimeConfiguration?: list<Configuration>|null,
     *     monitoringConfiguration?: MonitoringConfiguration|null,
     *     interactiveConfiguration?: InteractiveConfiguration|null,
     *     schedulerConfiguration?: SchedulerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
