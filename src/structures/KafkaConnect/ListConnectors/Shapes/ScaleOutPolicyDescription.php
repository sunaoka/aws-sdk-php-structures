<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $cpuUtilizationPercentage
 */
class ScaleOutPolicyDescription extends Shape
{
    /**
     * @param array{cpuUtilizationPercentage?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
