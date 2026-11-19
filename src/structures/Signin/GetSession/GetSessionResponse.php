<?php

namespace Sunaoka\Aws\Structures\Signin\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionArn
 * @property string $principalArn
 * @property string|null $role
 * @property 'ACTIVE'|'REVOKED'|null $status
 * @property string|null $clientId
 * @property 'CLI'|'MCP'|null $clientType
 * @property string|null $resource
 * @property int $issuedAt
 * @property int $expiresAt
 * @property int|null $lastUsedAt
 * @property string|null $issuedInRegion
 * @property string|null $originSessionArn
 * @property string|null $userAgent
 */
class GetSessionResponse extends Response
{
}
