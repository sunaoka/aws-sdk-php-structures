<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAITING_FOR_PRIORITY'|'QUEUED_FOR_EXECUTION'|'STARTING_INSTANCE'|'DOWNLOADING_DATA'|'RUNNING'|'DEPRIORITIZED_DUE_TO_INACTIVITY'|'UPLOADING_RESULTS'|'COMPLETED'|'FAILED'|'MAX_RUNTIME_EXCEEDED'|'CANCELLED'|null $eventType
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult|null $timeOfEvent
 */
class JobEventDetails extends Shape
{
    /**
     * @param array{
     *     eventType?: 'WAITING_FOR_PRIORITY'|'QUEUED_FOR_EXECUTION'|'STARTING_INSTANCE'|'DOWNLOADING_DATA'|'RUNNING'|'DEPRIORITIZED_DUE_TO_INACTIVITY'|'UPLOADING_RESULTS'|'COMPLETED'|'FAILED'|'MAX_RUNTIME_EXCEEDED'|'CANCELLED'|null,
     *     message?: string|null,
     *     timeOfEvent?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
