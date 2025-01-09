<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $NextToken
 * @property int<1, 10> $MaxResults
 * @property Shapes\TimeRange $StartTimeFilter
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING' $StatusFilter
 */
class ListDataSourceSyncJobsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 10>,
     *     StartTimeFilter?: Shapes\TimeRange,
     *     StatusFilter?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
