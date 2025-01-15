<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'>|null $JobStatuses
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobStatuses?: list<'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
