<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZone
 * @property 'default'|'dedicated'|'host'|null $tenancy
 * @property string|null $hostId
 * @property string|null $hostResourceGroupArn
 */
class Placement extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     tenancy?: 'default'|'dedicated'|'host'|null,
     *     hostId?: string|null,
     *     hostResourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
