<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionRequest|null $definition
 * @property DataValue|null $value
 * @property 'UPDATE'|'DELETE'|'CREATE'|null $updateType
 */
class PropertyRequest extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionRequest|null,
     *     value?: DataValue|null,
     *     updateType?: 'UPDATE'|'DELETE'|'CREATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
