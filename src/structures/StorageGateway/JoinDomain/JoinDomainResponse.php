<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property 'ACCESS_DENIED'|'DETACHED'|'JOINED'|'JOINING'|'NETWORK_ERROR'|'TIMEOUT'|'UNKNOWN_ERROR' $ActiveDirectoryStatus
 */
class JoinDomainResponse extends Response
{
}
