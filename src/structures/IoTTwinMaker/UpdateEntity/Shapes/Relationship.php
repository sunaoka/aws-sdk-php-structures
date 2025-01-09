<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetComponentTypeId
 * @property string $relationshipType
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     targetComponentTypeId?: string,
     *     relationshipType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
