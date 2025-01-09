<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetEntityId
 * @property string $targetComponentName
 */
class RelationshipValue extends Shape
{
    /**
     * @param array{
     *     targetEntityId?: string,
     *     targetComponentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
