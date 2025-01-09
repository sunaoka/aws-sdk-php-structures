<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionRequest $definition
 * @property DataValue $value
 * @property 'UPDATE'|'DELETE'|'CREATE'|'RESET_VALUE' $updateType
 */
class PropertyRequest extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionRequest,
     *     value?: DataValue,
     *     updateType?: 'UPDATE'|'DELETE'|'CREATE'|'RESET_VALUE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
