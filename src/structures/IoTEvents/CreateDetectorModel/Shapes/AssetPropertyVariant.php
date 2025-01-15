<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property string|null $integerValue
 * @property string|null $doubleValue
 * @property string|null $booleanValue
 */
class AssetPropertyVariant extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     integerValue?: string|null,
     *     doubleValue?: string|null,
     *     booleanValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
