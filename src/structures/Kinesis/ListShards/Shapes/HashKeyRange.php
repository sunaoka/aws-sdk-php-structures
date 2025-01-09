<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartingHashKey
 * @property string $EndingHashKey
 */
class HashKeyRange extends Shape
{
    /**
     * @param array{
     *     StartingHashKey: string,
     *     EndingHashKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
