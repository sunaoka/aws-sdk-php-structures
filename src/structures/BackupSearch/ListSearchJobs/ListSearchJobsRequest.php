<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED' $ByStatus
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListSearchJobsRequest extends Request
{
    /**
     * @param array{
     *     ByStatus?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED',
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
