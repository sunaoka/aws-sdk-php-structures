<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $GroupName
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 */
class SpotPlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     GroupName?: string|null,
     *     Tenancy?: 'default'|'dedicated'|'host'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
