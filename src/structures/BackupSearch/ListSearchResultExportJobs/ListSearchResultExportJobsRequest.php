<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $SearchJobIdentifier
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListSearchResultExportJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'FAILED'|'COMPLETED'|null,
     *     SearchJobIdentifier?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
