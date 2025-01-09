<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY' $SizingMode
 * @property int $SizeGiB
 */
class OpenZFSReadCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     SizingMode?: 'NO_CACHE'|'USER_PROVISIONED'|'PROPORTIONAL_TO_THROUGHPUT_CAPACITY',
     *     SizeGiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
