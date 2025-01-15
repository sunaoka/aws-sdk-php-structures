<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR'|null $state
 * @property ErrorDetails|null $error
 */
class Status extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR'|null,
     *     error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
