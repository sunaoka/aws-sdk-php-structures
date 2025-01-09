<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property int<0, 100> $ProgressPercent
 * @property string $StatusDetail
 * @property \Aws\Api\DateTimeResult $UpdateDateTime
 */
class MigrationTaskSummary extends Shape
{
    /**
     * @param array{
     *     ProgressUpdateStream?: string,
     *     MigrationTaskName?: string,
     *     Status?: 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     ProgressPercent?: int<0, 100>,
     *     StatusDetail?: string,
     *     UpdateDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
