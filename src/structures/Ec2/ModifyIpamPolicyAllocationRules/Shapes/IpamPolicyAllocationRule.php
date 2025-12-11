<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPolicyAllocationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIpamPoolId
 */
class IpamPolicyAllocationRule extends Shape
{
    /**
     * @param array{SourceIpamPoolId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
