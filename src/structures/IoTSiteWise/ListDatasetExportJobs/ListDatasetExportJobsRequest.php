<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property 'ALL'|'SUBMITTED'|'RUNNING'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null $filter
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListDatasetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     filter?: 'ALL'|'SUBMITTED'|'RUNNING'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
