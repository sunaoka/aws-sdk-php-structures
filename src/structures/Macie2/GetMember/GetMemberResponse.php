<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMember;

use Sunaoka\Aws\Structures\Response;

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
class GetMemberResponse extends Response
{
}
