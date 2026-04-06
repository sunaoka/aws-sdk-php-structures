<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property bool|null $isDefault
 * @property RuleMatch|null $match
 * @property int<1, 2000>|null $priority
 * @property RuleAction|null $action
 */
class RuleUpdateSuccess extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     isDefault?: bool|null,
     *     match?: RuleMatch|null,
     *     priority?: int<1, 2000>|null,
     *     action?: RuleAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
