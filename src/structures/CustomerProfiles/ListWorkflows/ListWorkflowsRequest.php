<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'APPFLOW_INTEGRATION'|null $WorkflowType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $QueryStartDate
 * @property \Aws\Api\DateTimeResult|null $QueryEndDate
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowType?: 'APPFLOW_INTEGRATION'|null,
     *     Status?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED'|null,
     *     QueryStartDate?: \Aws\Api\DateTimeResult|null,
     *     QueryEndDate?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
