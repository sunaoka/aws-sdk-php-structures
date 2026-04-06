<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRuleGroupPriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleGroupName
 * @property int|null $Priority
 */
class ProxyRuleGroupPriorityResult extends Shape
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
