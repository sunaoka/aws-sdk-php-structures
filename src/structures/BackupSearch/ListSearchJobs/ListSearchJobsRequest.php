<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED' $ByStatus
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListSearchJobsRequest extends Request
{
    /**
     * @param array{
     *     ByStatus?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
