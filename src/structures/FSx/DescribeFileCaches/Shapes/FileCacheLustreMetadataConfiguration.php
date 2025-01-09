<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $StorageCapacity
 */
class FileCacheLustreMetadataConfiguration extends Shape
{
    /**
     * @param array{StorageCapacity: int<0, 2147483647>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
