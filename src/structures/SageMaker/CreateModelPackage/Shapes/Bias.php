<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource $Report
 * @property MetricsSource $PreTrainingReport
 * @property MetricsSource $PostTrainingReport
 */
class Bias extends Shape
{
    /**
     * @param array{
     *     Report?: MetricsSource,
     *     PreTrainingReport?: MetricsSource,
     *     PostTrainingReport?: MetricsSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
