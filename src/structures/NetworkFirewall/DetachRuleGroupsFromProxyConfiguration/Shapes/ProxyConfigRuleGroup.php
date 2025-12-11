<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DetachRuleGroupsFromProxyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 * @property string|null $Type
 * @property int|null $Priority
 */
class ProxyConfigRuleGroup extends Shape
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null,
     *     Type?: string|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
