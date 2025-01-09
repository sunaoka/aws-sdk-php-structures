<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource $Constraints
 * @property FileSource $ConfigFile
 */
class DriftCheckExplainability extends Shape
{
    /**
     * @param array{
     *     Constraints?: MetricsSource,
     *     ConfigFile?: FileSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
