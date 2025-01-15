<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 * @property Shapes\TimeRange|null $StartTimeFilter
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null $StatusFilter
 */
class ListDataSourceSyncJobsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null,
     *     StartTimeFilter?: Shapes\TimeRange|null,
     *     StatusFilter?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
