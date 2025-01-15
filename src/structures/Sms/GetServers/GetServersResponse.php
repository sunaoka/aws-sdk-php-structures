<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $lastModifiedOn
 * @property 'NOT_IMPORTED'|'IMPORTING'|'AVAILABLE'|'DELETED'|'EXPIRED'|null $serverCatalogStatus
 * @property list<Shapes\Server>|null $serverList
 * @property string|null $nextToken
 */
class GetServersResponse extends Response
{
}
