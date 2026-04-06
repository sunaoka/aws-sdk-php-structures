<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string|null $alias
 * @property int<1, 1000>|null $maxResults
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     alias?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
