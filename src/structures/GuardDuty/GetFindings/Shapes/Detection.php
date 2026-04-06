<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Anomaly|null $Anomaly
 */
class Detection extends Shape
{
    /**
     * @param array{Anomaly?: Anomaly|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
