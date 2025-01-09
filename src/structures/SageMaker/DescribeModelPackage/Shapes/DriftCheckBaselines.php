<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DriftCheckBias $Bias
 * @property DriftCheckExplainability $Explainability
 * @property DriftCheckModelQuality $ModelQuality
 * @property DriftCheckModelDataQuality $ModelDataQuality
 */
class DriftCheckBaselines extends Shape
{
    /**
     * @param array{
     *     Bias?: DriftCheckBias,
     *     Explainability?: DriftCheckExplainability,
     *     ModelQuality?: DriftCheckModelQuality,
     *     ModelDataQuality?: DriftCheckModelDataQuality
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
