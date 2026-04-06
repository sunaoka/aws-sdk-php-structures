<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOpenZfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NfsMountOptions|null $MountOptions
 */
class FsxProtocolNfs extends Shape
{
    /**
     * @param array{MountOptions?: NfsMountOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
