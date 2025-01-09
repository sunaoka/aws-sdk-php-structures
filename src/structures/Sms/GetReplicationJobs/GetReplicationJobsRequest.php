<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetReplicationJobsRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
