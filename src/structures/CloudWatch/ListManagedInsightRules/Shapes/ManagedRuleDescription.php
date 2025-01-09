<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $ResourceARN
 * @property ManagedRuleState $RuleState
 */
class ManagedRuleDescription extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string,
     *     ResourceARN?: string,
     *     RuleState?: ManagedRuleState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
