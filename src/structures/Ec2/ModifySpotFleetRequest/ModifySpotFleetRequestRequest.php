<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'noTermination'|'default'|null $ExcessCapacityTerminationPolicy
 * @property list<Shapes\LaunchTemplateConfig>|null $LaunchTemplateConfigs
 * @property string $SpotFleetRequestId
 * @property int|null $TargetCapacity
 * @property int|null $OnDemandTargetCapacity
 * @property string|null $Context
 */
class ModifySpotFleetRequestRequest extends Request
{
    /**
     * @param array{
     *     ExcessCapacityTerminationPolicy?: 'noTermination'|'default'|null,
     *     LaunchTemplateConfigs?: list<Shapes\LaunchTemplateConfig>|null,
     *     SpotFleetRequestId: string,
     *     TargetCapacity?: int|null,
     *     OnDemandTargetCapacity?: int|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
