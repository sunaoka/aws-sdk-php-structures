<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property int|null $integerValue
 * @property double|null $doubleValue
 * @property bool|null $booleanValue
 * @property PropertyValueNullValue|null $nullValue
 */
class Variant extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     integerValue?: int|null,
     *     doubleValue?: double|null,
     *     booleanValue?: bool|null,
     *     nullValue?: PropertyValueNullValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
