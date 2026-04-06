<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property 'ACCESS_DENIED'|'DETACHED'|'JOINED'|'JOINING'|'NETWORK_ERROR'|'TIMEOUT'|'UNKNOWN_ERROR'|'INSUFFICIENT_PERMISSIONS'|null $ActiveDirectoryStatus
 */
class JoinDomainResponse extends Response
{
}
