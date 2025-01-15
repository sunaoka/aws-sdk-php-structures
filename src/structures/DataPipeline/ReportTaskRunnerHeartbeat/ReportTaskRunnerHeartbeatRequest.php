<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ReportTaskRunnerHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskrunnerId
 * @property string|null $workerGroup
 * @property string|null $hostname
 */
class ReportTaskRunnerHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     taskrunnerId: string,
     *     workerGroup?: string|null,
     *     hostname?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
