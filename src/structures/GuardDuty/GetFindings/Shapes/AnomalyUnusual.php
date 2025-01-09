<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<string, AnomalyObject>> $Behavior
 */
class AnomalyUnusual extends Shape
{
    /**
     * @param array{Behavior?: array<string, array<string, AnomalyObject>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
