<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomizationFeatureContentModerationConfig $ContentModeration
 */
class CustomizationFeatureConfig extends Shape
{
    /**
     * @param array{ContentModeration?: CustomizationFeatureContentModerationConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
