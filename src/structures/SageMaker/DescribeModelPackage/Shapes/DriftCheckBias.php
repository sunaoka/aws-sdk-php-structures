<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSource $ConfigFile
 * @property MetricsSource $PreTrainingConstraints
 * @property MetricsSource $PostTrainingConstraints
 */
class DriftCheckBias extends Shape
{
    /**
     * @param array{
     *     ConfigFile?: FileSource,
     *     PreTrainingConstraints?: MetricsSource,
     *     PostTrainingConstraints?: MetricsSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
