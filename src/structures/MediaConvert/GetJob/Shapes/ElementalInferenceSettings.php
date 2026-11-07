<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElementalInferenceFeedConfigurationSource|null $FeedConfigurationSource
 */
class ElementalInferenceSettings extends Shape
{
    /**
     * @param array{FeedConfigurationSource?: ElementalInferenceFeedConfigurationSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
