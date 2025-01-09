<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribute $attribute
 * @property Measurement $measurement
 * @property Transform $transform
 * @property Metric $metric
 */
class PropertyType extends Shape
{
    /**
     * @param array{
     *     attribute?: Attribute,
     *     measurement?: Measurement,
     *     transform?: Transform,
     *     metric?: Metric
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
