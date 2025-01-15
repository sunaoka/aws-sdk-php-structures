<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property string|null $ResourceARN
 * @property ManagedRuleState|null $RuleState
 */
class ManagedRuleDescription extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     ResourceARN?: string|null,
     *     RuleState?: ManagedRuleState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
