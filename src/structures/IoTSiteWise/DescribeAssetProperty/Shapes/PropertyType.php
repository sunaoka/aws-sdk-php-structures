<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribute|null $attribute
 * @property Measurement|null $measurement
 * @property Transform|null $transform
 * @property Metric|null $metric
 */
class PropertyType extends Shape
{
    /**
     * @param array{
     *     attribute?: Attribute|null,
     *     measurement?: Measurement|null,
     *     transform?: Transform|null,
     *     metric?: Metric|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
