<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue $Value
 * @property 'HIGH'|'LOW'|'NONE' $Confidence
 * @property string $Message
 */
class DetectedField extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue,
     *     Confidence?: 'HIGH'|'LOW'|'NONE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
