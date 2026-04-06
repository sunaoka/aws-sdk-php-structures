<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POSIX' $Type
 * @property OpenZFSPosixFileSystemUser|null $PosixUser
 */
class OpenZFSFileSystemIdentity extends Shape
{
    /**
     * @param array{
     *     Type: 'POSIX',
     *     PosixUser?: OpenZFSPosixFileSystemUser|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
