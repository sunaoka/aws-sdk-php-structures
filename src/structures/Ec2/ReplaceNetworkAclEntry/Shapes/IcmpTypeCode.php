<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceNetworkAclEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Code
 * @property int $Type
 */
class IcmpTypeCode extends Shape
{
    /**
     * @param array{
     *     Code?: int,
     *     Type?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
