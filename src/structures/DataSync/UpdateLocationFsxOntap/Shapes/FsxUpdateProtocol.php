<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FsxProtocolNfs|null $NFS
 * @property FsxUpdateProtocolSmb|null $SMB
 */
class FsxUpdateProtocol extends Shape
{
    /**
     * @param array{
     *     NFS?: FsxProtocolNfs|null,
     *     SMB?: FsxUpdateProtocolSmb|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
