<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMasterAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $invitationId
 * @property \Aws\Api\DateTimeResult|null $invitedAt
 * @property 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended'|null $relationshipStatus
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     invitationId?: string|null,
     *     invitedAt?: \Aws\Api\DateTimeResult|null,
     *     relationshipStatus?: 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
