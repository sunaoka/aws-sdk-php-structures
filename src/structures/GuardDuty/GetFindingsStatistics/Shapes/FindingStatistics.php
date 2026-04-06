<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int>|null $CountBySeverity
 */
class FindingStatistics extends Shape
{
    /**
     * @param array{CountBySeverity?: array<string, int>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
