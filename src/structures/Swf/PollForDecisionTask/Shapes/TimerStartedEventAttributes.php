<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property string|null $control
 * @property string $startToFireTimeout
 * @property int $decisionTaskCompletedEventId
 */
class TimerStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     control?: string|null,
     *     startToFireTimeout: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
