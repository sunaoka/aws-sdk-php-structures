<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $syncSource
 * @property list<Shapes\SyncResourceFilter> $filters
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListSyncResourcesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     syncSource: string,
     *     filters?: list<Shapes\SyncResourceFilter>,
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
