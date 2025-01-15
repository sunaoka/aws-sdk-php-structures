<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Code
 * @property int|null $Type
 */
class IcmpTypeCode extends Shape
{
    /**
     * @param array{
     *     Code?: int|null,
     *     Type?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
