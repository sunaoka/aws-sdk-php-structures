<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $result
 * @property int $scheduledEventId
 * @property int $startedEventId
 */
class ActivityTaskCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     result?: string,
     *     scheduledEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
