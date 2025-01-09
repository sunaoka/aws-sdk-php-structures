<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetContactReachabilityStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainName
 * @property 'PENDING'|'DONE'|'EXPIRED' $status
 */
class GetContactReachabilityStatusResponse extends Response
{
}
