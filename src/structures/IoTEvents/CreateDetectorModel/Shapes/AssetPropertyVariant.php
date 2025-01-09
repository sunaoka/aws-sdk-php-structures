<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stringValue
 * @property string $integerValue
 * @property string $doubleValue
 * @property string $booleanValue
 */
class AssetPropertyVariant extends Shape
{
    /**
     * @param array{
     *     stringValue?: string,
     *     integerValue?: string,
     *     doubleValue?: string,
     *     booleanValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
