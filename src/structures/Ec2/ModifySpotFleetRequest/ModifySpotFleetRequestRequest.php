<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LaunchTemplateConfig>|null $LaunchTemplateConfigs
 * @property int|null $OnDemandTargetCapacity
 * @property string|null $Context
 * @property string $SpotFleetRequestId
 * @property int|null $TargetCapacity
 * @property 'noTermination'|'default'|null $ExcessCapacityTerminationPolicy
 */
class ModifySpotFleetRequestRequest extends Request
{
    /**
     * @param array{
     *     LaunchTemplateConfigs?: list<Shapes\LaunchTemplateConfig>|null,
     *     OnDemandTargetCapacity?: int|null,
     *     Context?: string|null,
     *     SpotFleetRequestId: string,
     *     TargetCapacity?: int|null,
     *     ExcessCapacityTerminationPolicy?: 'noTermination'|'default'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
