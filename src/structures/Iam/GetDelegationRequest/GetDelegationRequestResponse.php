<?php

namespace Sunaoka\Aws\Structures\Iam\GetDelegationRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DelegationRequest|null $DelegationRequest
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null $PermissionCheckStatus
 * @property 'ALLOWED'|'DENIED'|'UNSURE'|null $PermissionCheckResult
 */
class GetDelegationRequestResponse extends Response
{
}
