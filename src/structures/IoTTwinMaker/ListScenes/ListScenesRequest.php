<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListScenes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListScenesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
