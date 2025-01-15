<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITWithHITType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property int|null $MaxAssignments
 * @property int $LifetimeInSeconds
 * @property string|null $Question
 * @property string|null $RequesterAnnotation
 * @property string|null $UniqueRequestToken
 * @property Shapes\ReviewPolicy|null $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy|null $HITReviewPolicy
 * @property string|null $HITLayoutId
 * @property list<Shapes\HITLayoutParameter>|null $HITLayoutParameters
 */
class CreateHITWithHITTypeRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId: string,
     *     MaxAssignments?: int|null,
     *     LifetimeInSeconds: int,
     *     Question?: string|null,
     *     RequesterAnnotation?: string|null,
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
