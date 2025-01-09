<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED' $Lifecycle
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
