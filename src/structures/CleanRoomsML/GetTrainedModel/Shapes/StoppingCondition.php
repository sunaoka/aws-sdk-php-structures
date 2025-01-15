<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2419200>|null $maxRuntimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{maxRuntimeInSeconds?: int<1, 2419200>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
