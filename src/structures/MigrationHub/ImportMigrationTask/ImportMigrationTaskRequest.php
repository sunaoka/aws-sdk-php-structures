<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ImportMigrationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property bool|null $DryRun
 */
class ImportMigrationTaskRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
