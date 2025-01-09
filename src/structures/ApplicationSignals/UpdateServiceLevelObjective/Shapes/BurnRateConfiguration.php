<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $LookBackWindowMinutes
 */
class BurnRateConfiguration extends Shape
{
    /**
     * @param array{LookBackWindowMinutes: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
