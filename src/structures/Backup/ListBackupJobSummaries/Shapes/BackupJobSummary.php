<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY'|null $State
 * @property string|null $ResourceType
 * @property string|null $MessageCategory
 * @property int|null $Count
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class BackupJobSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     AccountId?: string|null,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY'|null,
     *     ResourceType?: string|null,
     *     MessageCategory?: string|null,
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
