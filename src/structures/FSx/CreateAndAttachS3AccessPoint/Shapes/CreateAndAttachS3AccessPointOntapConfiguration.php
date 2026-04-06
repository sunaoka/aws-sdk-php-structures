<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 * @property OntapFileSystemIdentity $FileSystemIdentity
 */
class CreateAndAttachS3AccessPointOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     VolumeId: string,
     *     FileSystemIdentity: OntapFileSystemIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
