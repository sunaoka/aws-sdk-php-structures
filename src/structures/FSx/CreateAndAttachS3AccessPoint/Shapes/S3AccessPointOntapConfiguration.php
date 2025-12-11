<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property OntapFileSystemIdentity|null $FileSystemIdentity
 */
class S3AccessPointOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     FileSystemIdentity?: OntapFileSystemIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
