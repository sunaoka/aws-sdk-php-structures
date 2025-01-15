<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListScenes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListScenesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
