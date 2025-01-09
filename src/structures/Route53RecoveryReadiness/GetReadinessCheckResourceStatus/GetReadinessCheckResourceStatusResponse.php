<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED' $Readiness
 * @property list<Shapes\RuleResult> $Rules
 */
class GetReadinessCheckResourceStatusResponse extends Response
{
}
