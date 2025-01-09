<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class IpamResourceTag extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
