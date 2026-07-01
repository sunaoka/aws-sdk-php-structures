<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $IntegerDurationMaximumCompressionDenominator
 * @property int<0, 2147483647>|null $IntegerDurationMaximumCompressionNumerator
 * @property int<0, 500>|null $IntegerDurationTrimThresholdMilliseconds
 */
class DurationControl extends Shape
{
    /**
     * @param array{
     *     IntegerDurationMaximumCompressionDenominator?: int<1, 2147483647>|null,
     *     IntegerDurationMaximumCompressionNumerator?: int<0, 2147483647>|null,
     *     IntegerDurationTrimThresholdMilliseconds?: int<0, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
