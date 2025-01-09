<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxRuntimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{maxRuntimeInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
