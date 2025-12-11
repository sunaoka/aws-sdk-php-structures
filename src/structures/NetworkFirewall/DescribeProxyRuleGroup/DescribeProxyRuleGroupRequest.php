<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 */
class DescribeProxyRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
