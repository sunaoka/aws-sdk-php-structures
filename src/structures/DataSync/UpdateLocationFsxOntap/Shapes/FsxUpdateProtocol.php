<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FsxProtocolNfs $NFS
 * @property FsxUpdateProtocolSmb $SMB
 */
class FsxUpdateProtocol extends Shape
{
    /**
     * @param array{
     *     NFS?: FsxProtocolNfs,
     *     SMB?: FsxUpdateProtocolSmb
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
