<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEGINS_WITH'|null $ComparisonOperator
 * @property string|null $ComparisonValue
 */
class ChannelNameCondition extends Shape
{
    /**
     * @param array{
     *     ComparisonOperator?: 'BEGINS_WITH'|null,
     *     ComparisonValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
