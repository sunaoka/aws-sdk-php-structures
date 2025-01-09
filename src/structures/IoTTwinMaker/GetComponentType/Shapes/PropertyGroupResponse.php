<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TABULAR' $groupType
 * @property list<string> $propertyNames
 * @property bool $isInherited
 */
class PropertyGroupResponse extends Shape
{
    /**
     * @param array{
     *     groupType: 'TABULAR',
     *     propertyNames: list<string>,
     *     isInherited: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
