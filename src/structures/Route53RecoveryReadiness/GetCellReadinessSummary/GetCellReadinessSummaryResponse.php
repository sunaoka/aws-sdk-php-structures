<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED' $Readiness
 * @property list<Shapes\ReadinessCheckSummary> $ReadinessChecks
 */
class GetCellReadinessSummaryResponse extends Response
{
}
