<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $cpuUtilizationPercentage
 */
class ScaleInPolicyDescription extends Shape
{
    /**
     * @param array{cpuUtilizationPercentage?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
