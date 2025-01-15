<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'TRUSTED_ADVISOR'|null $Provider
 * @property string|null $LensArn
 * @property string|null $PillarId
 * @property string|null $QuestionId
 * @property string|null $ChoiceId
 * @property 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED'|null $Status
 * @property string|null $AccountId
 * @property int<1, 9999>|null $FlaggedResources
 * @property 'ASSUME_ROLE_ERROR'|'ACCESS_DENIED'|'UNKNOWN_ERROR'|'PREMIUM_SUPPORT_REQUIRED'|null $Reason
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class CheckDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Provider?: 'TRUSTED_ADVISOR'|null,
     *     LensArn?: string|null,
     *     PillarId?: string|null,
     *     QuestionId?: string|null,
     *     ChoiceId?: string|null,
     *     Status?: 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED'|null,
     *     AccountId?: string|null,
     *     FlaggedResources?: int<1, 9999>|null,
     *     Reason?: 'ASSUME_ROLE_ERROR'|'ACCESS_DENIED'|'UNKNOWN_ERROR'|'PREMIUM_SUPPORT_REQUIRED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
