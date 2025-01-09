<?php

namespace Sunaoka\Aws\Structures\MTurk\ApproveAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssignmentId
 * @property string $RequesterFeedback
 * @property bool $OverrideRejection
 */
class ApproveAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AssignmentId: string,
     *     RequesterFeedback?: string,
     *     OverrideRejection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
