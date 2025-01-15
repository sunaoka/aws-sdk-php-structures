<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroupReadinessSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null $Readiness
 * @property list<Shapes\ReadinessCheckSummary>|null $ReadinessChecks
 */
class GetRecoveryGroupReadinessSummaryResponse extends Response
{
}
