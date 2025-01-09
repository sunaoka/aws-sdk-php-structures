<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
