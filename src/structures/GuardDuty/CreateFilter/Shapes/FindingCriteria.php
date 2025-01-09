<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Condition> $Criterion
 */
class FindingCriteria extends Shape
{
    /**
     * @param array{Criterion?: array<string, Condition>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
