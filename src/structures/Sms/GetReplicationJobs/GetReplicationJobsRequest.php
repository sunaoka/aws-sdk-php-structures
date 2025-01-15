<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $replicationJobId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetReplicationJobsRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
