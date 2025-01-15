<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EditorId
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $From
 * @property \Aws\Api\DateTimeResult|null $To
 * @property string|null $Marker
 * @property string|null $ExecutionEngineId
 */
class ListNotebookExecutionsRequest extends Request
{
    /**
     * @param array{
     *     EditorId?: string|null,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null,
     *     From?: \Aws\Api\DateTimeResult|null,
     *     To?: \Aws\Api\DateTimeResult|null,
     *     Marker?: string|null,
     *     ExecutionEngineId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
