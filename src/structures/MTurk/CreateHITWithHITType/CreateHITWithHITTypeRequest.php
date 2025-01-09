<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITWithHITType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property int $MaxAssignments
 * @property int $LifetimeInSeconds
 * @property string $Question
 * @property string $RequesterAnnotation
 * @property string $UniqueRequestToken
 * @property Shapes\ReviewPolicy $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy $HITReviewPolicy
 * @property string $HITLayoutId
 * @property list<Shapes\HITLayoutParameter> $HITLayoutParameters
 */
class CreateHITWithHITTypeRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId: string,
     *     MaxAssignments?: int,
     *     LifetimeInSeconds: int,
     *     Question?: string,
     *     RequesterAnnotation?: string,
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
