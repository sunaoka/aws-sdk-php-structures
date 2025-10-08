<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY'|null $SizingMode
 * @property int<0, 2147483647>|null $SizeGiB
 */
class LustreReadCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     SizingMode?: 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY'|null,
     *     SizeGiB?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
