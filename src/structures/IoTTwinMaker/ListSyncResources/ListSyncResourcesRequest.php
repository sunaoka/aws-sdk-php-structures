<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $syncSource
 * @property list<Shapes\SyncResourceFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSyncResourcesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     syncSource: string,
     *     filters?: list<Shapes\SyncResourceFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
