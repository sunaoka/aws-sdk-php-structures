<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SubnetDetails> $subnets
 * @property list<SecurityGroupDetails> $securityGroups
 */
class ProxyVpcUserConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets: list<SubnetDetails>,
     *     securityGroups: list<SecurityGroupDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
