<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventBuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Policy
 */
class EventBus extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
