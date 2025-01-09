<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEGINS_WITH' $ComparisonOperator
 * @property string $ComparisonValue
 */
class StreamNameCondition extends Shape
{
    /**
     * @param array{
     *     ComparisonOperator?: 'BEGINS_WITH',
     *     ComparisonValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
