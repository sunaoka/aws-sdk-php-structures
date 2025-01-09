<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TABULAR' $groupType
 * @property list<string> $propertyNames
 */
class PropertyGroupRequest extends Shape
{
    /**
     * @param array{
     *     groupType?: 'TABULAR',
     *     propertyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
