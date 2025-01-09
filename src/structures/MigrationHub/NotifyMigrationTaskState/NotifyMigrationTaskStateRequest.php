<?php

namespace Sunaoka\Aws\Structures\MigrationHub\NotifyMigrationTaskState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property Shapes\Task $Task
 * @property \Aws\Api\DateTimeResult $UpdateDateTime
 * @property int $NextUpdateSeconds
 * @property bool $DryRun
 */
class NotifyMigrationTaskStateRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     Task: Shapes\Task,
     *     UpdateDateTime: \Aws\Api\DateTimeResult,
     *     NextUpdateSeconds: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
