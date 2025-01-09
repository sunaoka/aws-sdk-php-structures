<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EditorId
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $From
 * @property \Aws\Api\DateTimeResult $To
 * @property string $Marker
 * @property string $ExecutionEngineId
 */
class ListNotebookExecutionsRequest extends Request
{
    /**
     * @param array{
     *     EditorId?: string,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED',
     *     From?: \Aws\Api\DateTimeResult,
     *     To?: \Aws\Api\DateTimeResult,
     *     Marker?: string,
     *     ExecutionEngineId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
