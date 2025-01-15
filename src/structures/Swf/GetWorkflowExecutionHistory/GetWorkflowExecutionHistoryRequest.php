<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\WorkflowExecution $execution
 * @property string|null $nextPageToken
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 */
class GetWorkflowExecutionHistoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     execution: Shapes\WorkflowExecution,
     *     nextPageToken?: string|null,
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
