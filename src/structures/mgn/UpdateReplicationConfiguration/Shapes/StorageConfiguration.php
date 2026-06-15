<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EBS'|'FSX_ONTAP' $storageType
 * @property FsxOntapConfiguration|null $fsxOntapConfiguration
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageType: 'EBS'|'FSX_ONTAP',
     *     fsxOntapConfiguration?: FsxOntapConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
