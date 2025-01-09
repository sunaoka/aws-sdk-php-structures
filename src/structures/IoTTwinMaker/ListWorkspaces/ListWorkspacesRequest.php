<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
