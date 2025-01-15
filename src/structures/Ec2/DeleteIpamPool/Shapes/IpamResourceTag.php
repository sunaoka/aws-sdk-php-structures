<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 */
class IpamResourceTag extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
