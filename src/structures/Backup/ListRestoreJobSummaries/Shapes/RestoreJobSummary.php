<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY'|null $State
 * @property string|null $ResourceType
 * @property int|null $Count
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class RestoreJobSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     AccountId?: string|null,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY'|null,
     *     ResourceType?: string|null,
     *     Count?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
