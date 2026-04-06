<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property 'ACCESS_DENIED'|'DETACHED'|'JOINED'|'JOINING'|'NETWORK_ERROR'|'TIMEOUT'|'UNKNOWN_ERROR'|null $ActiveDirectoryStatus
 */
class JoinDomainResponse extends Response
{
}
