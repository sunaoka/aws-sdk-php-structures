<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAdministratorAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $invitationId
 * @property \Aws\Api\DateTimeResult $invitedAt
 * @property 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended' $relationshipStatus
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     invitationId?: string,
     *     invitedAt?: \Aws\Api\DateTimeResult,
     *     relationshipStatus?: 'Enabled'|'Paused'|'Invited'|'Created'|'Removed'|'Resigned'|'EmailVerificationInProgress'|'EmailVerificationFailed'|'RegionDisabled'|'AccountSuspended'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
