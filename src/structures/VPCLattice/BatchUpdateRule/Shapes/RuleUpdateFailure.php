<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $ruleIdentifier
 */
class RuleUpdateFailure extends Shape
{
    /**
     * @param array{
     *     failureCode?: string|null,
     *     failureMessage?: string|null,
     *     ruleIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
