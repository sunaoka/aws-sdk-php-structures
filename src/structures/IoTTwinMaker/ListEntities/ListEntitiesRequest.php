<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\ListEntitiesFilter>|null $filters
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     filters?: list<Shapes\ListEntitiesFilter>|null,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
