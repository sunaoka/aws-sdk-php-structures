<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null $ByStatus
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListSearchJobsRequest extends Request
{
    /**
     * @param array{
     *     ByStatus?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
