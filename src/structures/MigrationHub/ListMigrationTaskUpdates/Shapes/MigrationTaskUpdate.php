<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTaskUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $UpdateDateTime
 * @property 'MIGRATION_TASK_STATE_UPDATED'|null $UpdateType
 * @property Task|null $MigrationTaskState
 */
class MigrationTaskUpdate extends Shape
{
    /**
     * @param array{
     *     UpdateDateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateType?: 'MIGRATION_TASK_STATE_UPDATED'|null,
     *     MigrationTaskState?: Task|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
