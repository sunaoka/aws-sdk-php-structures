<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyRuleGroupArn
 * @property string|null $ProxyRuleGroupName
 * @property list<string> $Rules
 */
class DeleteProxyRulesRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupArn?: string|null,
     *     ProxyRuleGroupName?: string|null,
     *     Rules: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
