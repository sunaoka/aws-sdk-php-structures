<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BooleanCondition> $conditions
 * @property bool $defaultValue
 */
class RequiredCaseRule extends Shape
{
    /**
     * @param array{
     *     conditions: list<BooleanCondition>,
     *     defaultValue: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
