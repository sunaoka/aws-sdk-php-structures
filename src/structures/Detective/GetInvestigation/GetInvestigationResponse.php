<?php

namespace Sunaoka\Aws\Structures\Detective\GetInvestigation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GraphArn
 * @property string $InvestigationId
 * @property string $EntityArn
 * @property 'IAM_ROLE'|'IAM_USER' $EntityType
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $ScopeStartTime
 * @property \Aws\Api\DateTimeResult $ScopeEndTime
 * @property 'RUNNING'|'FAILED'|'SUCCESSFUL' $Status
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $Severity
 * @property 'ACTIVE'|'ARCHIVED' $State
 */
class GetInvestigationResponse extends Response
{
}
