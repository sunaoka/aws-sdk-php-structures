<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $ConfidenceThreshold
 */
class CustomizationFeatureContentModerationConfig extends Shape
{
    /**
     * @param array{ConfidenceThreshold?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
