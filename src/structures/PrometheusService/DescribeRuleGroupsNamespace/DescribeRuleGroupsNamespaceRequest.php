<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $name
 */
class DescribeRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
