<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListRuleGroupsNamespacesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
