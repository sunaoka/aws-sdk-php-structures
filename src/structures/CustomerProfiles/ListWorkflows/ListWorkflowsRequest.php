<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'APPFLOW_INTEGRATION' $WorkflowType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED' $Status
 * @property \Aws\Api\DateTimeResult $QueryStartDate
 * @property \Aws\Api\DateTimeResult $QueryEndDate
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowType?: 'APPFLOW_INTEGRATION',
     *     Status?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED',
     *     QueryStartDate?: \Aws\Api\DateTimeResult,
     *     QueryEndDate?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
