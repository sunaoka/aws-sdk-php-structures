<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetSuppressionOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEDIUM'|'HIGH'|'MANAGED' $ConfidenceVerdictThreshold
 */
class SuppressionConfidenceThreshold extends Shape
{
    /**
     * @param array{ConfidenceVerdictThreshold: 'MEDIUM'|'HIGH'|'MANAGED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
