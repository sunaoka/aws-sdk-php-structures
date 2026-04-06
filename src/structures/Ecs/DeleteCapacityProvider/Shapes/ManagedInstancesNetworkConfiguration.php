<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroups
 */
class ManagedInstancesNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets?: list<string>|null,
     *     securityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
