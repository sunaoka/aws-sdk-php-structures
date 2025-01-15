<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Message>|null $Messages
 * @property string|null $NextToken
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null $Readiness
 * @property list<Shapes\ResourceResult>|null $Resources
 */
class GetReadinessCheckStatusResponse extends Response
{
}
