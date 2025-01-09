<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $cpuUtilizationPercentage
 */
class ScaleInPolicy extends Shape
{
    /**
     * @param array{cpuUtilizationPercentage: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
