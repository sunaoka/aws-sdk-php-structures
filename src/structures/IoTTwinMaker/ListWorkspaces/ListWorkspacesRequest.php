<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
