<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\ListComponentTypesFilter> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class ListComponentTypesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     filters?: list<Shapes\ListComponentTypesFilter>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
