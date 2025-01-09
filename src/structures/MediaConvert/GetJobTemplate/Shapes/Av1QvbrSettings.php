<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $QvbrQualityLevel
 * @property double $QvbrQualityLevelFineTune
 */
class Av1QvbrSettings extends Shape
{
    /**
     * @param array{
     *     QvbrQualityLevel?: int<1, 10>,
     *     QvbrQualityLevelFineTune?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
