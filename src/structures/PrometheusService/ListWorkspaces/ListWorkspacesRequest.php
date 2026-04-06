<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
