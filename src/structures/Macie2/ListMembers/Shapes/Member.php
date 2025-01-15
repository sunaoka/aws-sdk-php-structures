<?php

namespace Sunaoka\Aws\Structures\Macie2\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $administratorAccountId
 * @property string|null $arn
 * @property string|null $email
 * @property \Aws\Api\DateTimeResult|null $invitedAt
 * @property string|null $masterAccountId
 * @property 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended'|null $relationshipStatus
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     administratorAccountId?: string|null,
     *     arn?: string|null,
     *     email?: string|null,
     *     invitedAt?: \Aws\Api\DateTimeResult|null,
     *     masterAccountId?: string|null,
     *     relationshipStatus?: 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended'|null,
     *     tags?: array<string, string>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
