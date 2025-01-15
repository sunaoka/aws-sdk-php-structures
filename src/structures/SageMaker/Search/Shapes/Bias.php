<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource|null $Report
 * @property MetricsSource|null $PreTrainingReport
 * @property MetricsSource|null $PostTrainingReport
 */
class Bias extends Shape
{
    /**
     * @param array{
     *     Report?: MetricsSource|null,
     *     PreTrainingReport?: MetricsSource|null,
     *     PostTrainingReport?: MetricsSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
