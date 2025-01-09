<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Anomaly $Anomaly
 * @property Sequence $Sequence
 */
class Detection extends Shape
{
    /**
     * @param array{
     *     Anomaly?: Anomaly,
     *     Sequence?: Sequence
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
