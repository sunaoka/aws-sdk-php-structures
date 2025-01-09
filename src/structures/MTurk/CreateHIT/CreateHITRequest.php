<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxAssignments
 * @property int $AutoApprovalDelayInSeconds
 * @property int $LifetimeInSeconds
 * @property int $AssignmentDurationInSeconds
 * @property string $Reward
 * @property string $Title
 * @property string $Keywords
 * @property string $Description
 * @property string $Question
 * @property string $RequesterAnnotation
 * @property list<Shapes\QualificationRequirement> $QualificationRequirements
 * @property string $UniqueRequestToken
 * @property Shapes\ReviewPolicy $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy $HITReviewPolicy
 * @property string $HITLayoutId
 * @property list<Shapes\HITLayoutParameter> $HITLayoutParameters
 */
class CreateHITRequest extends Request
{
    /**
     * @param array{
     *     MaxAssignments?: int,
     *     AutoApprovalDelayInSeconds?: int,
     *     LifetimeInSeconds: int,
     *     AssignmentDurationInSeconds: int,
     *     Reward: string,
     *     Title: string,
     *     Keywords?: string,
     *     Description: string,
     *     Question?: string,
     *     RequesterAnnotation?: string,
     *     QualificationRequirements?: list<Shapes\QualificationRequirement>,
     *     UniqueRequestToken?: string,
     *     AssignmentReviewPolicy?: Shapes\ReviewPolicy,
     *     HITReviewPolicy?: Shapes\ReviewPolicy,
     *     HITLayoutId?: string,
     *     HITLayoutParameters?: list<Shapes\HITLayoutParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
