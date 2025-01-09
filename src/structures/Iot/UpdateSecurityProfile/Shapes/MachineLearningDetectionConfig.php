<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH' $confidenceLevel
 */
class MachineLearningDetectionConfig extends Shape
{
    /**
     * @param array{confidenceLevel: 'LOW'|'MEDIUM'|'HIGH'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
