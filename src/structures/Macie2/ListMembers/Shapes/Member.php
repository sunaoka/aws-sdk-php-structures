<?php

namespace Sunaoka\Aws\Structures\Macie2\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $administratorAccountId
 * @property string $arn
 * @property string $email
 * @property \Aws\Api\DateTimeResult $invitedAt
 * @property string $masterAccountId
 * @property 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended' $relationshipStatus
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     administratorAccountId?: string,
     *     arn?: string,
     *     email?: string,
     *     invitedAt?: \Aws\Api\DateTimeResult,
     *     masterAccountId?: string,
     *     relationshipStatus?: 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended',
     *     tags?: array<string, string>,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
