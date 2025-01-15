<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FsxProtocolNfs|null $NFS
 * @property FsxProtocolSmb|null $SMB
 */
class FsxProtocol extends Shape
{
    /**
     * @param array{
     *     NFS?: FsxProtocolNfs|null,
     *     SMB?: FsxProtocolSmb|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
