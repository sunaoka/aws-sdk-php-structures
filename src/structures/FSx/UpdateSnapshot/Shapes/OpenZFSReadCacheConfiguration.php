<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY' $SizingMode
 * @property int<0, 2147483647> $SizeGiB
 */
class OpenZFSReadCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     SizingMode?: 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY',
     *     SizeGiB?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
