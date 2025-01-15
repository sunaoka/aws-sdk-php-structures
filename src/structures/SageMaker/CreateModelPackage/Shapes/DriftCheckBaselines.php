<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DriftCheckBias|null $Bias
 * @property DriftCheckExplainability|null $Explainability
 * @property DriftCheckModelQuality|null $ModelQuality
 * @property DriftCheckModelDataQuality|null $ModelDataQuality
 */
class DriftCheckBaselines extends Shape
{
    /**
     * @param array{
     *     Bias?: DriftCheckBias|null,
     *     Explainability?: DriftCheckExplainability|null,
     *     ModelQuality?: DriftCheckModelQuality|null,
     *     ModelDataQuality?: DriftCheckModelDataQuality|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
