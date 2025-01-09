<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'FAILED'|'COMPLETED' $Status
 * @property string $SearchJobIdentifier
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListSearchResultExportJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'FAILED'|'COMPLETED',
     *     SearchJobIdentifier?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
