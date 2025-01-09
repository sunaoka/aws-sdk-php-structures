<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60> $timeoutInMinutes
 */
class DeltaTimeSessionWindowConfiguration extends Shape
{
    /**
     * @param array{timeoutInMinutes: int<1, 60>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
