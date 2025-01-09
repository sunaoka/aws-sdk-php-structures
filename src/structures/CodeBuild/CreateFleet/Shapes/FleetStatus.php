<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'ROTATING'|'PENDING_DELETION'|'DELETING'|'CREATE_FAILED'|'UPDATE_ROLLBACK_FAILED'|'ACTIVE' $statusCode
 * @property 'CREATE_FAILED'|'UPDATE_FAILED'|'ACTION_REQUIRED'|'PENDING_DELETION'|'INSUFFICIENT_CAPACITY' $context
 * @property string $message
 */
class FleetStatus extends Shape
{
    /**
     * @param array{
     *     statusCode?: 'CREATING'|'UPDATING'|'ROTATING'|'PENDING_DELETION'|'DELETING'|'CREATE_FAILED'|'UPDATE_ROLLBACK_FAILED'|'ACTIVE',
     *     context?: 'CREATE_FAILED'|'UPDATE_FAILED'|'ACTION_REQUIRED'|'PENDING_DELETION'|'INSUFFICIENT_CAPACITY',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
