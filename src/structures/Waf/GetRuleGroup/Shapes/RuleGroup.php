<?php

namespace Sunaoka\Aws\Structures\Waf\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupId
 * @property string|null $Name
 * @property string|null $MetricName
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupId: string,
     *     Name?: string|null,
     *     MetricName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
