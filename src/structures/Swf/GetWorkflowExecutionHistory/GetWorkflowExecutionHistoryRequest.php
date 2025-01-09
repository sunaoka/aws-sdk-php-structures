<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\WorkflowExecution $execution
 * @property string $nextPageToken
 * @property int<0, 1000> $maximumPageSize
 * @property bool $reverseOrder
 */
class GetWorkflowExecutionHistoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     execution: Shapes\WorkflowExecution,
     *     nextPageToken?: string,
     *     maximumPageSize?: int<0, 1000>,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
