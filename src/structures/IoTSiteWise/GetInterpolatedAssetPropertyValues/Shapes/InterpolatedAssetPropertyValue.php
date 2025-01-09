<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeInNanos $timestamp
 * @property Variant $value
 */
class InterpolatedAssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     timestamp: TimeInNanos,
     *     value: Variant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
