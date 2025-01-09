<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property string $sessionName
 * @property int<0, 2147483647> $appVersion
 * @property int<0, 2147483647> $latestPublishedAppVersion
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR' $status
 * @property array<string, Shapes\CardStatus> $cardStatus
 * @property bool $userIsHost
 */
class GetQAppSessionResponse extends Response
{
}
