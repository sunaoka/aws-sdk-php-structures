<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NfsMountOptions $MountOptions
 */
class FsxProtocolNfs extends Shape
{
    /**
     * @param array{MountOptions?: NfsMountOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
