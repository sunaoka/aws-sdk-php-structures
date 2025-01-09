<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupName
 * @property string $ResourceId
 * @property int<1, 65535> $Priority
 */
class StatelessRuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupName?: string,
     *     ResourceId?: string,
     *     Priority?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
