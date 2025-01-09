<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $QvbrQualityLevel
 * @property double $QvbrQualityLevelFineTune
 */
class Av1QvbrSettings extends Shape
{
    /**
     * @param array{
     *     QvbrQualityLevel?: int,
     *     QvbrQualityLevelFineTune?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
