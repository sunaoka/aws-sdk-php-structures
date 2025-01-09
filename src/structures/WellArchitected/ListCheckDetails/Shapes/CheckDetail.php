<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'TRUSTED_ADVISOR' $Provider
 * @property string $LensArn
 * @property string $PillarId
 * @property string $QuestionId
 * @property string $ChoiceId
 * @property 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED' $Status
 * @property string $AccountId
 * @property int<1, 9999> $FlaggedResources
 * @property 'ASSUME_ROLE_ERROR'|'ACCESS_DENIED'|'UNKNOWN_ERROR'|'PREMIUM_SUPPORT_REQUIRED' $Reason
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class CheckDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     Provider?: 'TRUSTED_ADVISOR',
     *     LensArn?: string,
     *     PillarId?: string,
     *     QuestionId?: string,
     *     ChoiceId?: string,
     *     Status?: 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED',
     *     AccountId?: string,
     *     FlaggedResources?: int<1, 9999>,
     *     Reason?: 'ASSUME_ROLE_ERROR'|'ACCESS_DENIED'|'UNKNOWN_ERROR'|'PREMIUM_SUPPORT_REQUIRED',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
