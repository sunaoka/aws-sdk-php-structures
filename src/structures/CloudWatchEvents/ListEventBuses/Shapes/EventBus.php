<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventBuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Policy
 */
class EventBus extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
