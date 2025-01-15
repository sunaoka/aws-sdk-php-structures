<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelQuality|null $ModelQuality
 * @property ModelDataQuality|null $ModelDataQuality
 * @property Bias|null $Bias
 * @property Explainability|null $Explainability
 */
class ModelMetrics extends Shape
{
    /**
     * @param array{
     *     ModelQuality?: ModelQuality|null,
     *     ModelDataQuality?: ModelDataQuality|null,
     *     Bias?: Bias|null,
     *     Explainability?: Explainability|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
