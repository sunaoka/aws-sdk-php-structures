<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null $Lifecycle
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
