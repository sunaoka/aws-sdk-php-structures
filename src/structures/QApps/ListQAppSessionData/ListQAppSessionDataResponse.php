<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property list<Shapes\QAppSessionData> $sessionData
 * @property string $nextToken
 */
class ListQAppSessionDataResponse extends Response
{
}
