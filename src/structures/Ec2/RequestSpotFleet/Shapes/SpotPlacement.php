<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $GroupName
 * @property 'default'|'dedicated'|'host' $Tenancy
 */
class SpotPlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     GroupName?: string,
     *     Tenancy?: 'default'|'dedicated'|'host'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
