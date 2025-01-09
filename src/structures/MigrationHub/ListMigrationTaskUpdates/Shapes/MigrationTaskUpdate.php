<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTaskUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $UpdateDateTime
 * @property 'MIGRATION_TASK_STATE_UPDATED' $UpdateType
 * @property Task $MigrationTaskState
 */
class MigrationTaskUpdate extends Shape
{
    /**
     * @param array{
     *     UpdateDateTime?: \Aws\Api\DateTimeResult,
     *     UpdateType?: 'MIGRATION_TASK_STATE_UPDATED',
     *     MigrationTaskState?: Task
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
