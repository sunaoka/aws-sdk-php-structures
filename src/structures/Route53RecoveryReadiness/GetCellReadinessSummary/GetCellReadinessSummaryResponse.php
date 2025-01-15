<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null $Readiness
 * @property list<Shapes\ReadinessCheckSummary>|null $ReadinessChecks
 */
class GetCellReadinessSummaryResponse extends Response
{
}
