<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Equals
 * @property list<string>|null $NotEquals
 */
class CoverageFilterCondition extends Shape
{
    /**
     * @param array{
     *     Equals?: list<string>|null,
     *     NotEquals?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
