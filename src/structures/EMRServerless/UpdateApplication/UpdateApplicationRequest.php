<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property array<string, Shapes\InitialCapacityConfig> $initialCapacity
 * @property Shapes\MaximumAllowedResources $maximumCapacity
 * @property Shapes\AutoStartConfig $autoStartConfiguration
 * @property Shapes\AutoStopConfig $autoStopConfiguration
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property 'ARM64'|'X86_64' $architecture
 * @property Shapes\ImageConfigurationInput $imageConfiguration
 * @property array<string, Shapes\WorkerTypeSpecificationInput> $workerTypeSpecifications
 * @property Shapes\InteractiveConfiguration $interactiveConfiguration
 * @property string $releaseLabel
 * @property list<Shapes\Configuration> $runtimeConfiguration
 * @property Shapes\MonitoringConfiguration $monitoringConfiguration
 * @property Shapes\SchedulerConfiguration $schedulerConfiguration
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken: string,
     *     initialCapacity?: array<string, Shapes\InitialCapacityConfig>,
     *     maximumCapacity?: Shapes\MaximumAllowedResources,
     *     autoStartConfiguration?: Shapes\AutoStartConfig,
     *     autoStopConfiguration?: Shapes\AutoStopConfig,
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     architecture?: 'ARM64'|'X86_64',
     *     imageConfiguration?: Shapes\ImageConfigurationInput,
     *     workerTypeSpecifications?: array<string, Shapes\WorkerTypeSpecificationInput>,
     *     interactiveConfiguration?: Shapes\InteractiveConfiguration,
     *     releaseLabel?: string,
     *     runtimeConfiguration?: list<Shapes\Configuration>,
     *     monitoringConfiguration?: Shapes\MonitoringConfiguration,
     *     schedulerConfiguration?: Shapes\SchedulerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
