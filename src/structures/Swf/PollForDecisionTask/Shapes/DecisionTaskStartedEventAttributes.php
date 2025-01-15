<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identity
 * @property int $scheduledEventId
 */
class DecisionTaskStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     identity?: string|null,
     *     scheduledEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
