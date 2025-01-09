<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleAction $action
 * @property string $arn
 * @property string $id
 * @property bool $isDefault
 * @property RuleMatch $match
 * @property string $name
 * @property int<1, 100> $priority
 */
class RuleUpdateSuccess extends Shape
{
    /**
     * @param array{
     *     action?: RuleAction,
     *     arn?: string,
     *     id?: string,
     *     isDefault?: bool,
     *     match?: RuleMatch,
     *     name?: string,
     *     priority?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
