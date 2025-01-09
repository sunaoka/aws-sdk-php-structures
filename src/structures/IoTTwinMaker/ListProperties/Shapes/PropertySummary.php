<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionResponse $definition
 * @property string $propertyName
 * @property DataValue $value
 * @property bool $areAllPropertyValuesReturned
 */
class PropertySummary extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionResponse,
     *     propertyName: string,
     *     value?: DataValue,
     *     areAllPropertyValuesReturned?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
