<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRuleGroupPriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleGroupName
 * @property int|null $NewPosition
 */
class ProxyRuleGroupPriority extends Shape
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     NewPosition?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
