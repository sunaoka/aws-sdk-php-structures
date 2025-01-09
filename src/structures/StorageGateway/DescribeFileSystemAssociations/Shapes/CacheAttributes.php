<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CacheStaleTimeoutInSeconds
 */
class CacheAttributes extends Shape
{
    /**
     * @param array{CacheStaleTimeoutInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
