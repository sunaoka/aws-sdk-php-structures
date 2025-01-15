<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResourceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'CREATE'|'DELETE'|'UPDATE'>|null $Operations
 * @property list<'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE'>|null $OperationStatuses
 */
class ResourceRequestStatusFilter extends Shape
{
    /**
     * @param array{
     *     Operations?: list<'CREATE'|'DELETE'|'UPDATE'>|null,
     *     OperationStatuses?: list<'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
