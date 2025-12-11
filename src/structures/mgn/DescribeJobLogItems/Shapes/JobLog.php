<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logDateTime
 * @property 'JOB_START'|'SERVER_SKIPPED'|'CLEANUP_START'|'CLEANUP_END'|'CLEANUP_FAIL'|'SNAPSHOT_START'|'SNAPSHOT_END'|'SNAPSHOT_FAIL'|'USING_PREVIOUS_SNAPSHOT'|'CONVERSION_START'|'CONVERSION_END'|'CONVERSION_FAIL'|'LAUNCH_START'|'LAUNCH_FAILED'|'JOB_CANCEL'|'JOB_END'|null $event
 * @property JobLogEventData|null $eventData
 */
class JobLog extends Shape
{
    /**
     * @param array{
     *     logDateTime?: string|null,
     *     event?: 'JOB_START'|'SERVER_SKIPPED'|'CLEANUP_START'|'CLEANUP_END'|'CLEANUP_FAIL'|'SNAPSHOT_START'|'SNAPSHOT_END'|'SNAPSHOT_FAIL'|'USING_PREVIOUS_SNAPSHOT'|'CONVERSION_START'|'CONVERSION_END'|'CONVERSION_FAIL'|'LAUNCH_START'|'LAUNCH_FAILED'|'JOB_CANCEL'|'JOB_END'|null,
     *     eventData?: JobLogEventData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
