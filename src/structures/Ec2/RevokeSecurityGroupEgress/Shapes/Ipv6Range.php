<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrIpv6
 * @property string|null $Description
 */
class Ipv6Range extends Shape
{
    /**
     * @param array{
     *     CidrIpv6?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
