<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property string $workspaceId
 */
class ListRuleGroupsNamespacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
