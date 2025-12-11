<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property ProxyRulesByRequestPhase|null $Rules
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class ProxyRuleGroup extends Shape
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     Rules?: ProxyRulesByRequestPhase|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
