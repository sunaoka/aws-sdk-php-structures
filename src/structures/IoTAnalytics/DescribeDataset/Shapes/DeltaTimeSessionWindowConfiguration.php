<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeoutInMinutes
 */
class DeltaTimeSessionWindowConfiguration extends Shape
{
    /**
     * @param array{timeoutInMinutes: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
