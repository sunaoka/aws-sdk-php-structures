<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupName
 * @property string|null $ResourceId
 * @property int<1, 65535>|null $Priority
 */
class StatelessRuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupName?: string|null,
     *     ResourceId?: string|null,
     *     Priority?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
