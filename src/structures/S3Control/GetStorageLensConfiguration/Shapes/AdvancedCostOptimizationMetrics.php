<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsEnabled
 */
class AdvancedCostOptimizationMetrics extends Shape
{
    /**
     * @param array{IsEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
