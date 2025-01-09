<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedResponseAction $fixedResponse
 * @property ForwardAction $forward
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     fixedResponse?: FixedResponseAction,
     *     forward?: ForwardAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
