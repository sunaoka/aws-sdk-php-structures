<?php

namespace Sunaoka\Aws\Structures\MTurk\RejectAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssignmentId
 * @property string $RequesterFeedback
 */
class RejectAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AssignmentId: string,
     *     RequesterFeedback: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
