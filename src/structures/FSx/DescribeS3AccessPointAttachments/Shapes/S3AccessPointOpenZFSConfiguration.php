<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property OpenZFSFileSystemIdentity|null $FileSystemIdentity
 */
class S3AccessPointOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     FileSystemIdentity?: OpenZFSFileSystemIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
