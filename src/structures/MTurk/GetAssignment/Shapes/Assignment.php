<?php

namespace Sunaoka\Aws\Structures\MTurk\GetAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssignmentId
 * @property string $WorkerId
 * @property string $HITId
 * @property 'Submitted'|'Approved'|'Rejected' $AssignmentStatus
 * @property \Aws\Api\DateTimeResult $AutoApprovalTime
 * @property \Aws\Api\DateTimeResult $AcceptTime
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $ApprovalTime
 * @property \Aws\Api\DateTimeResult $RejectionTime
 * @property \Aws\Api\DateTimeResult $Deadline
 * @property string $Answer
 * @property string $RequesterFeedback
 */
class Assignment extends Shape
{
    /**
     * @param array{
     *     AssignmentId?: string,
     *     WorkerId?: string,
     *     HITId?: string,
     *     AssignmentStatus?: 'Submitted'|'Approved'|'Rejected',
     *     AutoApprovalTime?: \Aws\Api\DateTimeResult,
     *     AcceptTime?: \Aws\Api\DateTimeResult,
     *     SubmitTime?: \Aws\Api\DateTimeResult,
     *     ApprovalTime?: \Aws\Api\DateTimeResult,
     *     RejectionTime?: \Aws\Api\DateTimeResult,
     *     Deadline?: \Aws\Api\DateTimeResult,
     *     Answer?: string,
     *     RequesterFeedback?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
