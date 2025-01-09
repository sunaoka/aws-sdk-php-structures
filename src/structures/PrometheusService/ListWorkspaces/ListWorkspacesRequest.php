<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property int $maxResults
 * @property string $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
