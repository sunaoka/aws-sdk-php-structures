<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $cpuUtilizationPercentage
 */
class ScaleInPolicyDescription extends Shape
{
    /**
     * @param array{cpuUtilizationPercentage?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
