<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 */
class CapacityProviderVpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
