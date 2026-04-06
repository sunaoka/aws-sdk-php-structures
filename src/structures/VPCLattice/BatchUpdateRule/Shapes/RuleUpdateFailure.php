<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleIdentifier
 * @property string|null $failureCode
 * @property string|null $failureMessage
 */
class RuleUpdateFailure extends Shape
{
    /**
     * @param array{
     *     ruleIdentifier?: string|null,
     *     failureCode?: string|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
