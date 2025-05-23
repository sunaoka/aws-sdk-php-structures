<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-2147483648, 2147483647>|null $Code
 * @property int<-2147483648, 2147483647>|null $Type
 */
class NetworkAclIcmpTypeCode extends Shape
{
    /**
     * @param array{
     *     Code?: int<-2147483648, 2147483647>|null,
     *     Type?: int<-2147483648, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
