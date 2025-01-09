<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $CidrIp
 */
class IpRange extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     CidrIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
