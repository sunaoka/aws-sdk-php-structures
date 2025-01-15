<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HITId
 * @property string|null $HITTypeId
 * @property string|null $HITGroupId
 * @property string|null $HITLayoutId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $Question
 * @property string|null $Keywords
 * @property 'Assignable'|'Unassignable'|'Reviewable'|'Reviewing'|'Disposed'|null $HITStatus
 * @property int|null $MaxAssignments
 * @property string|null $Reward
 * @property int|null $AutoApprovalDelayInSeconds
 * @property \Aws\Api\DateTimeResult|null $Expiration
 * @property int|null $AssignmentDurationInSeconds
 * @property string|null $RequesterAnnotation
 * @property list<QualificationRequirement>|null $QualificationRequirements
 * @property 'NotReviewed'|'MarkedForReview'|'ReviewedAppropriate'|'ReviewedInappropriate'|null $HITReviewStatus
 * @property int|null $NumberOfAssignmentsPending
 * @property int|null $NumberOfAssignmentsAvailable
 * @property int|null $NumberOfAssignmentsCompleted
 */
class HIT extends Shape
{
    /**
     * @param array{
     *     HITId?: string|null,
     *     HITTypeId?: string|null,
     *     HITGroupId?: string|null,
     *     HITLayoutId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     Question?: string|null,
     *     Keywords?: string|null,
     *     HITStatus?: 'Assignable'|'Unassignable'|'Reviewable'|'Reviewing'|'Disposed'|null,
     *     MaxAssignments?: int|null,
     *     Reward?: string|null,
     *     AutoApprovalDelayInSeconds?: int|null,
     *     Expiration?: \Aws\Api\DateTimeResult|null,
     *     AssignmentDurationInSeconds?: int|null,
     *     RequesterAnnotation?: string|null,
     *     QualificationRequirements?: list<QualificationRequirement>|null,
     *     HITReviewStatus?: 'NotReviewed'|'MarkedForReview'|'ReviewedAppropriate'|'ReviewedInappropriate'|null,
     *     NumberOfAssignmentsPending?: int|null,
     *     NumberOfAssignmentsAvailable?: int|null,
     *     NumberOfAssignmentsCompleted?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
