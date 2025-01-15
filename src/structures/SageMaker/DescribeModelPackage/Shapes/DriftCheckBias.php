<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSource|null $ConfigFile
 * @property MetricsSource|null $PreTrainingConstraints
 * @property MetricsSource|null $PostTrainingConstraints
 */
class DriftCheckBias extends Shape
{
    /**
     * @param array{
     *     ConfigFile?: FileSource|null,
     *     PreTrainingConstraints?: MetricsSource|null,
     *     PostTrainingConstraints?: MetricsSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
