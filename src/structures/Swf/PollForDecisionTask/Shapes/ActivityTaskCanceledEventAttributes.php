<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $details
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property int|null $latestCancelRequestedEventId
 */
class ActivityTaskCanceledEventAttributes extends Shape
{
    /**
     * @param array{
     *     details?: string|null,
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     latestCancelRequestedEventId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
