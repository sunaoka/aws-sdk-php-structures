<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ForwardAction|null $forward
 * @property FixedResponseAction|null $fixedResponse
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     forward?: ForwardAction|null,
     *     fixedResponse?: FixedResponseAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
