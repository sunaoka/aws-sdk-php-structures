<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LaunchTemplateConfig> $LaunchTemplateConfigs
 * @property int $OnDemandTargetCapacity
 * @property string $Context
 * @property string $SpotFleetRequestId
 * @property int $TargetCapacity
 * @property 'noTermination'|'default' $ExcessCapacityTerminationPolicy
 */
class ModifySpotFleetRequestRequest extends Request
{
    /**
     * @param array{
     *     LaunchTemplateConfigs?: list<Shapes\LaunchTemplateConfig>,
     *     OnDemandTargetCapacity?: int,
     *     Context?: string,
     *     SpotFleetRequestId: string,
     *     TargetCapacity?: int,
     *     ExcessCapacityTerminationPolicy?: 'noTermination'|'default'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
