<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $AccountId
 * @property 'CREATED'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY' $State
 * @property string $ResourceType
 * @property string $MessageCategory
 * @property int $Count
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class CopyJobSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     AccountId?: string,
     *     State?: 'CREATED'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY',
     *     ResourceType?: string,
     *     MessageCategory?: string,
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
