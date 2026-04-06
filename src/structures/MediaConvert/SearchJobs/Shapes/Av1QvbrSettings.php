<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10>|null $QvbrQualityLevel
 * @property double|null $QvbrQualityLevelFineTune
 */
class Av1QvbrSettings extends Shape
{
    /**
     * @param array{
     *     QvbrQualityLevel?: int<1, 10>|null,
     *     QvbrQualityLevelFineTune?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
