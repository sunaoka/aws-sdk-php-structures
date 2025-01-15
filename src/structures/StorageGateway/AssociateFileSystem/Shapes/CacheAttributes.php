<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssociateFileSystem\Shapes;

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
