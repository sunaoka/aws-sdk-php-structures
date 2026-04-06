<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AttachRuleGroupsToProxyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleGroupName
 * @property int|null $InsertPosition
 */
class ProxyRuleGroupAttachment extends Shape
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     InsertPosition?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
