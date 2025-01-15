<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string|null $componentPath
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     componentPath?: string|null,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
