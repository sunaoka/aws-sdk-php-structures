<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string $releaseLabel
 * @property string $type
 * @property string $clientToken
 * @property array<string, Shapes\InitialCapacityConfig>|null $initialCapacity
 * @property Shapes\MaximumAllowedResources|null $maximumCapacity
 * @property array<string, string>|null $tags
 * @property Shapes\AutoStartConfig|null $autoStartConfiguration
 * @property Shapes\AutoStopConfig|null $autoStopConfiguration
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property 'ARM64'|'X86_64'|null $architecture
 * @property Shapes\ImageConfigurationInput|null $imageConfiguration
 * @property array<string, Shapes\WorkerTypeSpecificationInput>|null $workerTypeSpecifications
 * @property list<Shapes\Configuration>|null $runtimeConfiguration
 * @property Shapes\MonitoringConfiguration|null $monitoringConfiguration
 * @property Shapes\InteractiveConfiguration|null $interactiveConfiguration
 * @property Shapes\SchedulerConfiguration|null $schedulerConfiguration
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     releaseLabel: string,
     *     type: string,
     *     clientToken: string,
     *     initialCapacity?: array<string, Shapes\InitialCapacityConfig>|null,
     *     maximumCapacity?: Shapes\MaximumAllowedResources|null,
     *     tags?: array<string, string>|null,
     *     autoStartConfiguration?: Shapes\AutoStartConfig|null,
     *     autoStopConfiguration?: Shapes\AutoStopConfig|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     architecture?: 'ARM64'|'X86_64'|null,
     *     imageConfiguration?: Shapes\ImageConfigurationInput|null,
     *     workerTypeSpecifications?: array<string, Shapes\WorkerTypeSpecificationInput>|null,
     *     runtimeConfiguration?: list<Shapes\Configuration>|null,
     *     monitoringConfiguration?: Shapes\MonitoringConfiguration|null,
     *     interactiveConfiguration?: Shapes\InteractiveConfiguration|null,
     *     schedulerConfiguration?: Shapes\SchedulerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
