<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateNFSFileShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CacheStaleTimeoutInSeconds
 */
class CacheAttributes extends Shape
{
    /**
     * @param array{CacheStaleTimeoutInSeconds?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
