<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'USER_PROVISIONED' $Mode
 * @property int $Iops
 */
class DiskIopsConfiguration extends Shape
{
    /**
     * @param array{
     *     Mode?: 'AUTOMATIC'|'USER_PROVISIONED',
     *     Iops?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
