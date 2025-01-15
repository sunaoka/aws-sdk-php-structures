<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifestNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Branch|null $branch
 * @property Sensor|null $sensor
 * @property Actuator|null $actuator
 * @property Attribute|null $attribute
 * @property CustomStruct|null $struct
 * @property CustomProperty|null $property
 */
class Node extends Shape
{
    /**
     * @param array{
     *     branch?: Branch|null,
     *     sensor?: Sensor|null,
     *     actuator?: Actuator|null,
     *     attribute?: Attribute|null,
     *     struct?: CustomStruct|null,
     *     property?: CustomProperty|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
