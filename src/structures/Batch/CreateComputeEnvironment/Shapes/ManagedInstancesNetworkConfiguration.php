<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string> $securityGroups
 */
class ManagedInstancesNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets: list<string>,
     *     securityGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
