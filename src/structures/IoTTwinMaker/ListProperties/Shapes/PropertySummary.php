<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionResponse|null $definition
 * @property string $propertyName
 * @property DataValue|null $value
 * @property bool|null $areAllPropertyValuesReturned
 */
class PropertySummary extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionResponse|null,
     *     propertyName: string,
     *     value?: DataValue|null,
     *     areAllPropertyValuesReturned?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
