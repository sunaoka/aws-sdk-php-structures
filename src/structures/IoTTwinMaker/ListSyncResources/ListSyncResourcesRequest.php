<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $syncSource
 * @property list<Shapes\SyncResourceFilter>|null $filters
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListSyncResourcesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     syncSource: string,
     *     filters?: list<Shapes\SyncResourceFilter>|null,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
