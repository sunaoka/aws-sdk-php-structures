<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProgressUpdateStream
 * @property string|null $MigrationTaskName
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property int<0, 100>|null $ProgressPercent
 * @property string|null $StatusDetail
 * @property \Aws\Api\DateTimeResult|null $UpdateDateTime
 */
class MigrationTaskSummary extends Shape
{
    /**
     * @param array{
     *     ProgressUpdateStream?: string|null,
     *     MigrationTaskName?: string|null,
     *     Status?: 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     ProgressPercent?: int<0, 100>|null,
     *     StatusDetail?: string|null,
     *     UpdateDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
