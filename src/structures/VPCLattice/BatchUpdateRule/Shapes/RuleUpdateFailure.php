<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $ruleIdentifier
 */
class RuleUpdateFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: string,
     *     failureMessage?: string,
     *     ruleIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
