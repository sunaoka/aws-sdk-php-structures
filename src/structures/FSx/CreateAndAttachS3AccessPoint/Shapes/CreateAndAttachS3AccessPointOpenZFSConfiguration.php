<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 * @property OpenZFSFileSystemIdentity $FileSystemIdentity
 */
class CreateAndAttachS3AccessPointOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     VolumeId: string,
     *     FileSystemIdentity: OpenZFSFileSystemIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
