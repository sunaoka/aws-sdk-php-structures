<?php

namespace Sunaoka\Aws\Structures\MTurk\GetAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssignmentId
 * @property string|null $WorkerId
 * @property string|null $HITId
 * @property 'Submitted'|'Approved'|'Rejected'|null $AssignmentStatus
 * @property \Aws\Api\DateTimeResult|null $AutoApprovalTime
 * @property \Aws\Api\DateTimeResult|null $AcceptTime
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $ApprovalTime
 * @property \Aws\Api\DateTimeResult|null $RejectionTime
 * @property \Aws\Api\DateTimeResult|null $Deadline
 * @property string|null $Answer
 * @property string|null $RequesterFeedback
 */
class Assignment extends Shape
{
    /**
     * @param array{
     *     AssignmentId?: string|null,
     *     WorkerId?: string|null,
     *     HITId?: string|null,
     *     AssignmentStatus?: 'Submitted'|'Approved'|'Rejected'|null,
     *     AutoApprovalTime?: \Aws\Api\DateTimeResult|null,
     *     AcceptTime?: \Aws\Api\DateTimeResult|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null,
     *     ApprovalTime?: \Aws\Api\DateTimeResult|null,
     *     RejectionTime?: \Aws\Api\DateTimeResult|null,
     *     Deadline?: \Aws\Api\DateTimeResult|null,
     *     Answer?: string|null,
     *     RequesterFeedback?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
