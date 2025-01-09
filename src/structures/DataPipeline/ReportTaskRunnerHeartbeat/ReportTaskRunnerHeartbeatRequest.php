<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ReportTaskRunnerHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskrunnerId
 * @property string $workerGroup
 * @property string $hostname
 */
class ReportTaskRunnerHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     taskrunnerId: string,
     *     workerGroup?: string,
     *     hostname?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
