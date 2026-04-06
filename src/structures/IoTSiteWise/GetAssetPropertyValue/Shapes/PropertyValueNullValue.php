<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'D'|'B'|'S'|'I'|'U' $valueType
 */
class PropertyValueNullValue extends Shape
{
    /**
     * @param array{valueType: 'D'|'B'|'S'|'I'|'U'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
