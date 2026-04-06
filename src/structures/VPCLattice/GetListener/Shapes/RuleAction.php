<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedResponseAction|null $fixedResponse
 * @property ForwardAction|null $forward
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     fixedResponse?: FixedResponseAction|null,
     *     forward?: ForwardAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
