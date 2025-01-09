<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $CidrIpv6
 */
class Ipv6Range extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     CidrIpv6?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
