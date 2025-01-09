<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListSyncJobsRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
