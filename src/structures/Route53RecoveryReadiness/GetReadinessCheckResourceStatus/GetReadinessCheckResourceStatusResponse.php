<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null $Readiness
 * @property list<Shapes\RuleResult>|null $Rules
 */
class GetReadinessCheckResourceStatusResponse extends Response
{
}
