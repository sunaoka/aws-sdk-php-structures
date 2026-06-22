<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

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
