<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Message> $Messages
 * @property string $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED' $Readiness
 * @property list<Shapes\ResourceResult> $Resources
 */
class GetReadinessCheckStatusResponse extends Response
{
}
