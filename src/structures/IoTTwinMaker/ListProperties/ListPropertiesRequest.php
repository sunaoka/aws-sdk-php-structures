<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $componentName
 * @property string $componentPath
 * @property string $entityId
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListPropertiesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     componentName?: string,
     *     componentPath?: string,
     *     entityId: string,
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
