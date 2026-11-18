<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUILT_IN'|'NONE' $TargetType
 * @property int<1, 1000>|null $MaxReceiveCount
 */
class DeadLetterConfiguration extends Shape
{
    /**
     * @param array{
     *     TargetType: 'BUILT_IN'|'NONE',
     *     MaxReceiveCount?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
