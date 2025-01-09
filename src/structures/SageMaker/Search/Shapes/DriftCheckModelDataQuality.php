<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource $Statistics
 * @property MetricsSource $Constraints
 */
class DriftCheckModelDataQuality extends Shape
{
    /**
     * @param array{
     *     Statistics?: MetricsSource,
     *     Constraints?: MetricsSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
