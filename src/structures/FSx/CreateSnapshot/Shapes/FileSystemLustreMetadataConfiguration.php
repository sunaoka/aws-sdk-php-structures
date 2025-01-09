<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Iops
 * @property 'AUTOMATIC'|'USER_PROVISIONED' $Mode
 */
class FileSystemLustreMetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     Iops?: int,
     *     Mode: 'AUTOMATIC'|'USER_PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
