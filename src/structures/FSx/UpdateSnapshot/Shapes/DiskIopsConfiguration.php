<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'USER_PROVISIONED'|null $Mode
 * @property int<0, 2147483647>|null $Iops
 */
class DiskIopsConfiguration extends Shape
{
    /**
     * @param array{
     *     Mode?: 'AUTOMATIC'|'USER_PROVISIONED'|null,
     *     Iops?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
