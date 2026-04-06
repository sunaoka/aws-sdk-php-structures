<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationChangeRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPROVED'|'DENIED'|'PENDING' $status
 */
class ApprovalStatusDetails extends Shape
{
    /**
     * @param array{status: 'APPROVED'|'DENIED'|'PENDING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
