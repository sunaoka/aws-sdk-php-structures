<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleAction $action
 * @property RuleMatch $match
 * @property int<1, 100> $priority
 * @property string $ruleIdentifier
 */
class RuleUpdate extends Shape
{
    /**
     * @param array{
     *     action?: RuleAction,
     *     match?: RuleMatch,
     *     priority?: int<1, 100>,
     *     ruleIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
