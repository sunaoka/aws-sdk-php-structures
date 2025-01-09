<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $markerName
 * @property string $details
 * @property int $decisionTaskCompletedEventId
 */
class MarkerRecordedEventAttributes extends Shape
{
    /**
     * @param array{
     *     markerName: string,
     *     details?: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
