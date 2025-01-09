<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAITING_FOR_PRIORITY'|'QUEUED_FOR_EXECUTION'|'STARTING_INSTANCE'|'DOWNLOADING_DATA'|'RUNNING'|'DEPRIORITIZED_DUE_TO_INACTIVITY'|'UPLOADING_RESULTS'|'COMPLETED'|'FAILED'|'MAX_RUNTIME_EXCEEDED'|'CANCELLED' $eventType
 * @property string $message
 * @property \Aws\Api\DateTimeResult $timeOfEvent
 */
class JobEventDetails extends Shape
{
    /**
     * @param array{
     *     eventType?: 'WAITING_FOR_PRIORITY'|'QUEUED_FOR_EXECUTION'|'STARTING_INSTANCE'|'DOWNLOADING_DATA'|'RUNNING'|'DEPRIORITIZED_DUE_TO_INACTIVITY'|'UPLOADING_RESULTS'|'COMPLETED'|'FAILED'|'MAX_RUNTIME_EXCEEDED'|'CANCELLED',
     *     message?: string,
     *     timeOfEvent?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
