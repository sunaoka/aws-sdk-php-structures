<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelQuality $ModelQuality
 * @property ModelDataQuality $ModelDataQuality
 * @property Bias $Bias
 * @property Explainability $Explainability
 */
class ModelMetrics extends Shape
{
    /**
     * @param array{
     *     ModelQuality?: ModelQuality,
     *     ModelDataQuality?: ModelDataQuality,
     *     Bias?: Bias,
     *     Explainability?: Explainability
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
