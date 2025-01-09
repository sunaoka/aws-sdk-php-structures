<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventName
 * @property string $condition
 * @property list<Action> $actions
 * @property string $nextState
 */
class TransitionEvent extends Shape
{
    /**
     * @param array{
     *     eventName: string,
     *     condition: string,
     *     actions?: list<Action>,
     *     nextState: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
