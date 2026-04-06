<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleAction|null $action
 * @property string|null $arn
 * @property string|null $id
 * @property bool|null $isDefault
 * @property RuleMatch|null $match
 * @property string|null $name
 * @property int<1, 100>|null $priority
 */
class RuleUpdateSuccess extends Shape
{
    /**
     * @param array{
     *     action?: RuleAction|null,
     *     arn?: string|null,
     *     id?: string|null,
     *     isDefault?: bool|null,
     *     match?: RuleMatch|null,
     *     name?: string|null,
     *     priority?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
