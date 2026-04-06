<?php

namespace Sunaoka\Aws\Structures\Detective\GetInvestigation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GraphArn
 * @property string|null $InvestigationId
 * @property string|null $EntityArn
 * @property 'IAM_ROLE'|'IAM_USER'|null $EntityType
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $ScopeStartTime
 * @property \Aws\Api\DateTimeResult|null $ScopeEndTime
 * @property 'RUNNING'|'FAILED'|'SUCCESSFUL'|null $Status
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Severity
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 */
class GetInvestigationResponse extends Response
{
}
