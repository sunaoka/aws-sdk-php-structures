<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleIdentifier
 * @property RuleMatch|null $match
 * @property int<1, 2000>|null $priority
 * @property RuleAction|null $action
 */
class RuleUpdate extends Shape
{
    /**
     * @param array{
     *     ruleIdentifier: string,
     *     match?: RuleMatch|null,
     *     priority?: int<1, 2000>|null,
     *     action?: RuleAction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
