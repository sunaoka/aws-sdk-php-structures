<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'unknown'|'no_override'|'zonal_shift_active'|'zonal_shift_delegated_to_dns'|null $State
 * @property 'AdministrativeOverride.Unknown'|'AdministrativeOverride.NoOverride'|'AdministrativeOverride.ZonalShiftActive'|'AdministrativeOverride.ZonalShiftDelegatedToDns'|null $Reason
 * @property string|null $Description
 */
class AdministrativeOverride extends Shape
{
    /**
     * @param array{
     *     State?: 'unknown'|'no_override'|'zonal_shift_active'|'zonal_shift_delegated_to_dns'|null,
     *     Reason?: 'AdministrativeOverride.Unknown'|'AdministrativeOverride.NoOverride'|'AdministrativeOverride.ZonalShiftActive'|'AdministrativeOverride.ZonalShiftDelegatedToDns'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
