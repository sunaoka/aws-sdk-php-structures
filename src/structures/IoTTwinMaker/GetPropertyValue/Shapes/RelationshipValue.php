<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetEntityId
 * @property string|null $targetComponentName
 */
class RelationshipValue extends Shape
{
    /**
     * @param array{
     *     targetEntityId?: string|null,
     *     targetComponentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
