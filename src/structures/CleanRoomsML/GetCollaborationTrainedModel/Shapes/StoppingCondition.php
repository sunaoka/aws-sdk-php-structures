<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2419200> $maxRuntimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{maxRuntimeInSeconds?: int<1, 2419200>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
