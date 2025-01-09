<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stringValue
 * @property int $integerValue
 * @property double $doubleValue
 * @property bool $booleanValue
 */
class Variant extends Shape
{
    /**
     * @param array{
     *     stringValue?: string,
     *     integerValue?: int,
     *     doubleValue?: double,
     *     booleanValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
