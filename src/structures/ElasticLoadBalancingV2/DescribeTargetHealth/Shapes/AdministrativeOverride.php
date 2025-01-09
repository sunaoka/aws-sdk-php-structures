<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'unknown'|'no_override'|'zonal_shift_active'|'zonal_shift_delegated_to_dns' $State
 * @property 'AdministrativeOverride.Unknown'|'AdministrativeOverride.NoOverride'|'AdministrativeOverride.ZonalShiftActive'|'AdministrativeOverride.ZonalShiftDelegatedToDns' $Reason
 * @property string $Description
 */
class AdministrativeOverride extends Shape
{
    /**
     * @param array{
     *     State?: 'unknown'|'no_override'|'zonal_shift_active'|'zonal_shift_delegated_to_dns',
     *     Reason?: 'AdministrativeOverride.Unknown'|'AdministrativeOverride.NoOverride'|'AdministrativeOverride.ZonalShiftActive'|'AdministrativeOverride.ZonalShiftDelegatedToDns',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
