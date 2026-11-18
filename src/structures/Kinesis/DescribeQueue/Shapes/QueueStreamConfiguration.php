<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property QueueStartingPosition|null $StartingPosition
 */
class QueueStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StartingPosition?: QueueStartingPosition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
