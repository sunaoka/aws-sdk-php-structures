<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\ListEntitiesFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     filters?: list<Shapes\ListEntitiesFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
