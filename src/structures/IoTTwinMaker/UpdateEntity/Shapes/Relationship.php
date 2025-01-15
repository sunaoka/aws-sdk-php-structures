<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetComponentTypeId
 * @property string|null $relationshipType
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     targetComponentTypeId?: string|null,
     *     relationshipType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
