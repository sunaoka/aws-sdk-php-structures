<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'USER_PROVISIONED' $Mode
 * @property int<0, 2400000> $Iops
 */
class DiskIopsConfiguration extends Shape
{
    /**
     * @param array{
     *     Mode?: 'AUTOMATIC'|'USER_PROVISIONED',
     *     Iops?: int<0, 2400000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
