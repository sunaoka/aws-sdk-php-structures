<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITWithHITType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HITId
 * @property string $HITTypeId
 * @property string $HITGroupId
 * @property string $HITLayoutId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Title
 * @property string $Description
 * @property string $Question
 * @property string $Keywords
 * @property 'Assignable'|'Unassignable'|'Reviewable'|'Reviewing'|'Disposed' $HITStatus
 * @property int $MaxAssignments
 * @property string $Reward
 * @property int $AutoApprovalDelayInSeconds
 * @property \Aws\Api\DateTimeResult $Expiration
 * @property int $AssignmentDurationInSeconds
 * @property string $RequesterAnnotation
 * @property list<QualificationRequirement> $QualificationRequirements
 * @property 'NotReviewed'|'MarkedForReview'|'ReviewedAppropriate'|'ReviewedInappropriate' $HITReviewStatus
 * @property int $NumberOfAssignmentsPending
 * @property int $NumberOfAssignmentsAvailable
 * @property int $NumberOfAssignmentsCompleted
 */
class HIT extends Shape
{
    /**
     * @param array{
     *     HITId?: string,
     *     HITTypeId?: string,
     *     HITGroupId?: string,
     *     HITLayoutId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Title?: string,
     *     Description?: string,
     *     Question?: string,
     *     Keywords?: string,
     *     HITStatus?: 'Assignable'|'Unassignable'|'Reviewable'|'Reviewing'|'Disposed',
     *     MaxAssignments?: int,
     *     Reward?: string,
     *     AutoApprovalDelayInSeconds?: int,
     *     Expiration?: \Aws\Api\DateTimeResult,
     *     AssignmentDurationInSeconds?: int,
     *     RequesterAnnotation?: string,
     *     QualificationRequirements?: list<QualificationRequirement>,
     *     HITReviewStatus?: 'NotReviewed'|'MarkedForReview'|'ReviewedAppropriate'|'ReviewedInappropriate',
     *     NumberOfAssignmentsPending?: int,
     *     NumberOfAssignmentsAvailable?: int,
     *     NumberOfAssignmentsCompleted?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
