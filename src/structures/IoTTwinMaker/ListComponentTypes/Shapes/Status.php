<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR' $state
 * @property ErrorDetails $error
 */
class Status extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'ERROR',
     *     error?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
