<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property array<string, Shapes\InitialCapacityConfig>|null $initialCapacity
 * @property Shapes\MaximumAllowedResources|null $maximumCapacity
 * @property Shapes\AutoStartConfig|null $autoStartConfiguration
 * @property Shapes\AutoStopConfig|null $autoStopConfiguration
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property 'ARM64'|'X86_64'|null $architecture
 * @property Shapes\ImageConfigurationInput|null $imageConfiguration
 * @property array<string, Shapes\WorkerTypeSpecificationInput>|null $workerTypeSpecifications
 * @property string|null $releaseLabel
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken: string,
     *     initialCapacity?: array<string, Shapes\InitialCapacityConfig>|null,
     *     maximumCapacity?: Shapes\MaximumAllowedResources|null,
     *     autoStartConfiguration?: Shapes\AutoStartConfig|null,
     *     autoStopConfiguration?: Shapes\AutoStopConfig|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     architecture?: 'ARM64'|'X86_64'|null,
     *     imageConfiguration?: Shapes\ImageConfigurationInput|null,
     *     workerTypeSpecifications?: array<string, Shapes\WorkerTypeSpecificationInput>|null,
     *     releaseLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
