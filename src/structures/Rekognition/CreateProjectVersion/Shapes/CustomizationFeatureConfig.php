<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomizationFeatureContentModerationConfig|null $ContentModeration
 */
class CustomizationFeatureConfig extends Shape
{
    /**
     * @param array{ContentModeration?: CustomizationFeatureContentModerationConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
