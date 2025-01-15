<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource|null $Report
 */
class Explainability extends Shape
{
    /**
     * @param array{Report?: MetricsSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
