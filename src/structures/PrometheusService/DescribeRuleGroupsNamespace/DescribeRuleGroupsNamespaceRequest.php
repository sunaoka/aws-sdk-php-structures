<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $workspaceId
 */
class DescribeRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
