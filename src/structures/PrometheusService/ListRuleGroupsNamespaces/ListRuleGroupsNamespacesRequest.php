<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $workspaceId
 */
class ListRuleGroupsNamespacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>,
     *     name?: string,
     *     nextToken?: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
