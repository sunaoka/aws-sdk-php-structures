<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleAction|null $action
 * @property RuleMatch|null $match
 * @property int<1, 100>|null $priority
 * @property string $ruleIdentifier
 */
class RuleUpdate extends Shape
{
    /**
     * @param array{
     *     action?: RuleAction|null,
     *     match?: RuleMatch|null,
     *     priority?: int<1, 100>|null,
     *     ruleIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
