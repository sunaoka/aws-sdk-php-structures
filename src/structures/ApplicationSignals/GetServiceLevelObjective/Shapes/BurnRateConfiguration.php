<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10080> $LookBackWindowMinutes
 */
class BurnRateConfiguration extends Shape
{
    /**
     * @param array{LookBackWindowMinutes: int<1, 10080>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
