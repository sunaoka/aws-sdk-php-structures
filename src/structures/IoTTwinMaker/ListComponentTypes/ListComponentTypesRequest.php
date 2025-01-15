<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\ListComponentTypesFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 200>|null $maxResults
 */
class ListComponentTypesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     filters?: list<Shapes\ListComponentTypesFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
