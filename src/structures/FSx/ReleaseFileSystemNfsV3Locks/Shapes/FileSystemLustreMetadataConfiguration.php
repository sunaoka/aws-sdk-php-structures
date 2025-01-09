<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1500, 192000> $Iops
 * @property 'AUTOMATIC'|'USER_PROVISIONED' $Mode
 */
class FileSystemLustreMetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     Iops?: int<1500, 192000>,
     *     Mode: 'AUTOMATIC'|'USER_PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
