<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeMigrationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 */
class DescribeMigrationTaskRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
