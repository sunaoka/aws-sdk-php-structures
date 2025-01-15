<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMember;

use Sunaoka\Aws\Structures\Response;

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
class GetMemberResponse extends Response
{
}
