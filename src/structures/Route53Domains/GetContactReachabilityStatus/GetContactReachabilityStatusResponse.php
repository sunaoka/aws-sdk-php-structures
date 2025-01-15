<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetContactReachabilityStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainName
 * @property 'PENDING'|'DONE'|'EXPIRED'|null $status
 */
class GetContactReachabilityStatusResponse extends Response
{
}
