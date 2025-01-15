<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue|null $Value
 * @property 'HIGH'|'LOW'|'NONE'|null $Confidence
 * @property string|null $Message
 */
class DetectedField extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue|null,
     *     Confidence?: 'HIGH'|'LOW'|'NONE'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
