<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\ListComponentTypesFilter> $filters
 * @property string $nextToken
 * @property int<0, 200> $maxResults
 */
class ListComponentTypesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     filters?: list<Shapes\ListComponentTypesFilter>,
     *     nextToken?: string,
     *     maxResults?: int<0, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
