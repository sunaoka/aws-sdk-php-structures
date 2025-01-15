<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property string|null $control
 * @property string $startToFireTimeout
 */
class StartTimerDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     control?: string|null,
     *     startToFireTimeout: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
