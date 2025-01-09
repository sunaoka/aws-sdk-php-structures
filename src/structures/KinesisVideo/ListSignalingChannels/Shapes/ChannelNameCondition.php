<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEGINS_WITH' $ComparisonOperator
 * @property string $ComparisonValue
 */
class ChannelNameCondition extends Shape
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
