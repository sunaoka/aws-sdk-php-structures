<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $componentName
 * @property string|null $componentPath
 * @property string $entityId
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListPropertiesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     componentName?: string|null,
     *     componentPath?: string|null,
     *     entityId: string,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
