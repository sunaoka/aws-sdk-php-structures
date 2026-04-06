<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property int<1200, 33600> $size
 */
class KxCacheStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     size: int<1200, 33600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
