<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConditionOperator
 * @property string|null $ConditionKey
 * @property list<string>|null $ConditionValues
 */
class ProxyRuleCondition extends Shape
{
    /**
     * @param array{
     *     ConditionOperator?: string|null,
     *     ConditionKey?: string|null,
     *     ConditionValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
