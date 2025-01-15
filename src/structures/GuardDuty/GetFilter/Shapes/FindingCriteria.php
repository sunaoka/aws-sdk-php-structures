<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Condition>|null $Criterion
 */
class FindingCriteria extends Shape
{
    /**
     * @param array{Criterion?: array<string, Condition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
