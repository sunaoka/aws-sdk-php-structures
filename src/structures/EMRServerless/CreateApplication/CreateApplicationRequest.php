<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $releaseLabel
 * @property string $type
 * @property string $clientToken
 * @property array<string, Shapes\InitialCapacityConfig> $initialCapacity
 * @property Shapes\MaximumAllowedResources $maximumCapacity
 * @property array<string, string> $tags
 * @property Shapes\AutoStartConfig $autoStartConfiguration
 * @property Shapes\AutoStopConfig $autoStopConfiguration
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property 'ARM64'|'X86_64' $architecture
 * @property Shapes\ImageConfigurationInput $imageConfiguration
 * @property array<string, Shapes\WorkerTypeSpecificationInput> $workerTypeSpecifications
 * @property list<Shapes\Configuration> $runtimeConfiguration
 * @property Shapes\MonitoringConfiguration $monitoringConfiguration
 * @property Shapes\InteractiveConfiguration $interactiveConfiguration
 * @property Shapes\SchedulerConfiguration $schedulerConfiguration
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     releaseLabel: string,
     *     type: string,
     *     clientToken: string,
     *     initialCapacity?: array<string, Shapes\InitialCapacityConfig>,
     *     maximumCapacity?: Shapes\MaximumAllowedResources,
     *     tags?: array<string, string>,
     *     autoStartConfiguration?: Shapes\AutoStartConfig,
     *     autoStopConfiguration?: Shapes\AutoStopConfig,
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     architecture?: 'ARM64'|'X86_64',
     *     imageConfiguration?: Shapes\ImageConfigurationInput,
     *     workerTypeSpecifications?: array<string, Shapes\WorkerTypeSpecificationInput>,
     *     runtimeConfiguration?: list<Shapes\Configuration>,
     *     monitoringConfiguration?: Shapes\MonitoringConfiguration,
     *     interactiveConfiguration?: Shapes\InteractiveConfiguration,
     *     schedulerConfiguration?: Shapes\SchedulerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
