<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property list<Shapes\QAppSessionData>|null $sessionData
 * @property string|null $nextToken
 */
class ListQAppSessionDataResponse extends Response
{
}
