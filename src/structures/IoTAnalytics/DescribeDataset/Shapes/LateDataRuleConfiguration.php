<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeltaTimeSessionWindowConfiguration|null $deltaTimeSessionWindowConfiguration
 */
class LateDataRuleConfiguration extends Shape
{
    /**
     * @param array{deltaTimeSessionWindowConfiguration?: DeltaTimeSessionWindowConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
