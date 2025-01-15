<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxAssignments
 * @property int|null $AutoApprovalDelayInSeconds
 * @property int $LifetimeInSeconds
 * @property int $AssignmentDurationInSeconds
 * @property string $Reward
 * @property string $Title
 * @property string|null $Keywords
 * @property string $Description
 * @property string|null $Question
 * @property string|null $RequesterAnnotation
 * @property list<Shapes\QualificationRequirement>|null $QualificationRequirements
 * @property string|null $UniqueRequestToken
 * @property Shapes\ReviewPolicy|null $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy|null $HITReviewPolicy
 * @property string|null $HITLayoutId
 * @property list<Shapes\HITLayoutParameter>|null $HITLayoutParameters
 */
class CreateHITRequest extends Request
{
    /**
     * @param array{
     *     MaxAssignments?: int|null,
     *     AutoApprovalDelayInSeconds?: int|null,
     *     LifetimeInSeconds: int,
     *     AssignmentDurationInSeconds: int,
     *     Reward: string,
     *     Title: string,
     *     Keywords?: string|null,
     *     Description: string,
     *     Question?: string|null,
     *     RequesterAnnotation?: string|null,
     *     QualificationRequirements?: list<Shapes\QualificationRequirement>|null,
     *     UniqueRequestToken?: string|null,
     *     AssignmentReviewPolicy?: Shapes\ReviewPolicy|null,
     *     HITReviewPolicy?: Shapes\ReviewPolicy|null,
     *     HITLayoutId?: string|null,
     *     HITLayoutParameters?: list<Shapes\HITLayoutParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
