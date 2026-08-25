<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateApprovalAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $approvalId
 * @property 'PENDING'|'APPROVED'|'REJECTED'|'REVOKED'|'REDEEMED' $status
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class UpdateApprovalActionResponse extends Response
{
}
