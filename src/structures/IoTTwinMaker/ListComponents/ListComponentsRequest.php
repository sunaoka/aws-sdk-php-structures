<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string $componentPath
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     componentPath?: string,
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
