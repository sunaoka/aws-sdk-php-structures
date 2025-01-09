<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
