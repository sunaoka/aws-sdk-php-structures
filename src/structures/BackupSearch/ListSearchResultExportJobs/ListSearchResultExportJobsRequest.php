<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'FAILED'|'COMPLETED' $Status
 * @property string $SearchJobIdentifier
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListSearchResultExportJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'FAILED'|'COMPLETED',
     *     SearchJobIdentifier?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
