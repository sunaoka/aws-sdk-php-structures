<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetReplicationRunsRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
