<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $markerName
 * @property string|null $details
 * @property int $decisionTaskCompletedEventId
 */
class MarkerRecordedEventAttributes extends Shape
{
    /**
     * @param array{
     *     markerName: string,
     *     details?: string|null,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
