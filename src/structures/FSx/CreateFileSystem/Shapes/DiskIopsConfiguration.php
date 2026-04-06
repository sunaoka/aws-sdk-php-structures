<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'USER_PROVISIONED'|null $Mode
 * @property int<0, 2400000>|null $Iops
 */
class DiskIopsConfiguration extends Shape
{
    /**
     * @param array{
     *     Mode?: 'AUTOMATIC'|'USER_PROVISIONED'|null,
     *     Iops?: int<0, 2400000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
