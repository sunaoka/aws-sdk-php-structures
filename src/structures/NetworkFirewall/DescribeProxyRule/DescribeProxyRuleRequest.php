<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProxyRuleName
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 */
class DescribeProxyRuleRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleName: string,
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
