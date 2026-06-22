<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentQualityAnalysisFeatureConfiguration|null $ContentLevel
 */
class RouterContentQualityAnalysisConfiguration extends Shape
{
    /**
     * @param array{ContentLevel?: ContentQualityAnalysisFeatureConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
