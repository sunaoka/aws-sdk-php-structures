<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $availabilityZone
 * @property 'default'|'dedicated'|'host' $tenancy
 * @property string $hostId
 * @property string $hostResourceGroupArn
 */
class Placement extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string,
     *     tenancy?: 'default'|'dedicated'|'host',
     *     hostId?: string,
     *     hostResourceGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
