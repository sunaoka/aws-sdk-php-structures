<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $CidrIpv6
 */
class Ipv6Range extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     CidrIpv6?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
