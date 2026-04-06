<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $defaultValue
 * @property list<BooleanCondition> $conditions
 */
class RequiredCaseRule extends Shape
{
    /**
     * @param array{
     *     defaultValue: bool,
     *     conditions: list<BooleanCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
