<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TABULAR'|null $groupType
 * @property list<string>|null $propertyNames
 * @property 'UPDATE'|'DELETE'|'CREATE'|null $updateType
 */
class ComponentPropertyGroupRequest extends Shape
{
    /**
     * @param array{
     *     groupType?: 'TABULAR'|null,
     *     propertyNames?: list<string>|null,
     *     updateType?: 'UPDATE'|'DELETE'|'CREATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
