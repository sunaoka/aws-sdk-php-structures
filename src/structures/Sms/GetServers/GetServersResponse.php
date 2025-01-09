<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $lastModifiedOn
 * @property 'NOT_IMPORTED'|'IMPORTING'|'AVAILABLE'|'DELETED'|'EXPIRED' $serverCatalogStatus
 * @property list<Shapes\Server> $serverList
 * @property string $nextToken
 */
class GetServersResponse extends Response
{
}
