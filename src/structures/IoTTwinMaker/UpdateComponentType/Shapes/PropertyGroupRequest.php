<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TABULAR'|null $groupType
 * @property list<string>|null $propertyNames
 */
class PropertyGroupRequest extends Shape
{
    /**
     * @param array{
     *     groupType?: 'TABULAR'|null,
     *     propertyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
