<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource|null $Statistics
 * @property MetricsSource|null $Constraints
 */
class DriftCheckModelQuality extends Shape
{
    /**
     * @param array{
     *     Statistics?: MetricsSource|null,
     *     Constraints?: MetricsSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
