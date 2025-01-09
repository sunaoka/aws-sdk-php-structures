<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskName
 * @property string $logGroupName
 * @property string $logStreamNamePrefix
 * @property int<0, max> $from
 * @property int<0, max> $to
 * @property string $destination
 * @property string $destinationPrefix
 */
class CreateExportTaskRequest extends Request
{
    /**
     * @param array{
     *     taskName?: string,
     *     logGroupName: string,
     *     logStreamNamePrefix?: string,
     *     from: int<0, max>,
     *     to: int<0, max>,
     *     destination: string,
     *     destinationPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
