<?php

namespace Sunaoka\Aws\Structures\MTurk\GetAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssignmentId
 */
class GetAssignmentRequest extends Request
{
    /**
     * @param array{AssignmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
