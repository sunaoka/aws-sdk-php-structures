<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Equals
 * @property list<string> $NotEquals
 */
class CoverageFilterCondition extends Shape
{
    /**
     * @param array{
     *     Equals?: list<string>,
     *     NotEquals?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
