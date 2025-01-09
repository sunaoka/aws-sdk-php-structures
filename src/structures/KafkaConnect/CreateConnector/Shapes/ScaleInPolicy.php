<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $cpuUtilizationPercentage
 */
class ScaleInPolicy extends Shape
{
    /**
     * @param array{cpuUtilizationPercentage: int<1, 100>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
