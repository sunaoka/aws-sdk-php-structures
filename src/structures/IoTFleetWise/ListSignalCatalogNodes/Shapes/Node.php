<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Branch $branch
 * @property Sensor $sensor
 * @property Actuator $actuator
 * @property Attribute $attribute
 * @property CustomStruct $struct
 * @property CustomProperty $property
 */
class Node extends Shape
{
    /**
     * @param array{
     *     branch?: Branch,
     *     sensor?: Sensor,
     *     actuator?: Actuator,
     *     attribute?: Attribute,
     *     struct?: CustomStruct,
     *     property?: CustomProperty
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
