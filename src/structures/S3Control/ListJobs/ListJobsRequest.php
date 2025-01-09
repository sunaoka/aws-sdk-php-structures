<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'> $JobStatuses
 * @property string $NextToken
 * @property int<0, 1000> $MaxResults
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobStatuses?: list<'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'>,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
