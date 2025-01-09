<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FsxProtocolNfs $NFS
 * @property FsxProtocolSmb $SMB
 */
class FsxProtocol extends Shape
{
    /**
     * @param array{
     *     NFS?: FsxProtocolNfs,
     *     SMB?: FsxProtocolSmb
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
