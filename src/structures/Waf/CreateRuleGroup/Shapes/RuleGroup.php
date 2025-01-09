<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupId
 * @property string $Name
 * @property string $MetricName
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupId: string,
     *     Name?: string,
     *     MetricName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
