<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property int $startedEventId
 */
class TimerFiredEventAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
