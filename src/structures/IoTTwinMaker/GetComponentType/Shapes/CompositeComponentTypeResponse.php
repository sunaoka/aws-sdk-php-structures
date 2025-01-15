<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentTypeId
 * @property bool|null $isInherited
 */
class CompositeComponentTypeResponse extends Shape
{
    /**
     * @param array{
     *     componentTypeId?: string|null,
     *     isInherited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
