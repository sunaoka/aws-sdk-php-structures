<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-2147483648, 2147483647> $Code
 * @property int<-2147483648, 2147483647> $Type
 */
class NetworkAclIcmpTypeCode extends Shape
{
    /**
     * @param array{
     *     Code?: int<-2147483648, 2147483647>,
     *     Type?: int<-2147483648, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
