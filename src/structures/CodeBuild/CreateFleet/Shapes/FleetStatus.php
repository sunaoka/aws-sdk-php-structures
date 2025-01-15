<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'ROTATING'|'PENDING_DELETION'|'DELETING'|'CREATE_FAILED'|'UPDATE_ROLLBACK_FAILED'|'ACTIVE'|null $statusCode
 * @property 'CREATE_FAILED'|'UPDATE_FAILED'|'ACTION_REQUIRED'|'PENDING_DELETION'|'INSUFFICIENT_CAPACITY'|null $context
 * @property string|null $message
 */
class FleetStatus extends Shape
{
    /**
     * @param array{
     *     statusCode?: 'CREATING'|'UPDATING'|'ROTATING'|'PENDING_DELETION'|'DELETING'|'CREATE_FAILED'|'UPDATE_ROLLBACK_FAILED'|'ACTIVE'|null,
     *     context?: 'CREATE_FAILED'|'UPDATE_FAILED'|'ACTION_REQUIRED'|'PENDING_DELETION'|'INSUFFICIENT_CAPACITY'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
