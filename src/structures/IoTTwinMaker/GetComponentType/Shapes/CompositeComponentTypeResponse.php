<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentTypeId
 * @property bool $isInherited
 */
class CompositeComponentTypeResponse extends Shape
{
    /**
     * @param array{
     *     componentTypeId?: string,
     *     isInherited?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
