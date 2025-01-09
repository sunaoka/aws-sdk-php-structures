<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TABULAR' $groupType
 * @property list<string> $propertyNames
 * @property 'UPDATE'|'DELETE'|'CREATE' $updateType
 */
class ComponentPropertyGroupRequest extends Shape
{
    /**
     * @param array{
     *     groupType?: 'TABULAR',
     *     propertyNames?: list<string>,
     *     updateType?: 'UPDATE'|'DELETE'|'CREATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
