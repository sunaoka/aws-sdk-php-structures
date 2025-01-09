<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeltaTimeSessionWindowConfiguration $deltaTimeSessionWindowConfiguration
 */
class LateDataRuleConfiguration extends Shape
{
    /**
     * @param array{deltaTimeSessionWindowConfiguration?: DeltaTimeSessionWindowConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
