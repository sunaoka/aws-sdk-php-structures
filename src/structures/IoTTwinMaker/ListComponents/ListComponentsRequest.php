<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string $componentPath
 * @property int $maxResults
 * @property string $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     componentPath?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
