<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource $Report
 */
class Explainability extends Shape
{
    /**
     * @param array{Report?: MetricsSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
