<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionResponse $definition
 * @property DataValue $value
 * @property bool $areAllPropertyValuesReturned
 */
class PropertyResponse extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionResponse,
     *     value?: DataValue,
     *     areAllPropertyValuesReturned?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
