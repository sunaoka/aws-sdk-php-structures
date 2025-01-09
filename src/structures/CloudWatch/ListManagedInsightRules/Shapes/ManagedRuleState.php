<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListManagedInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $State
 */
class ManagedRuleState extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     State: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
