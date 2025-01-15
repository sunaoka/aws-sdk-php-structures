<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $taskName
 * @property string $logGroupName
 * @property string|null $logStreamNamePrefix
 * @property int<0, max> $from
 * @property int<0, max> $to
 * @property string $destination
 * @property string|null $destinationPrefix
 */
class CreateExportTaskRequest extends Request
{
    /**
     * @param array{
     *     taskName?: string|null,
     *     logGroupName: string,
     *     logStreamNamePrefix?: string|null,
     *     from: int<0, max>,
     *     to: int<0, max>,
     *     destination: string,
     *     destinationPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
