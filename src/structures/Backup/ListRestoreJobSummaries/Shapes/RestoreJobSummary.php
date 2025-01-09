<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY' $State
 * @property string $ResourceType
 * @property int $Count
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class RestoreJobSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     AccountId?: string,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY',
     *     ResourceType?: string,
     *     Count?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
