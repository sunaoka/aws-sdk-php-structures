<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrIp
 * @property string|null $Description
 */
class IpRange extends Shape
{
    /**
     * @param array{
     *     CidrIp?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
