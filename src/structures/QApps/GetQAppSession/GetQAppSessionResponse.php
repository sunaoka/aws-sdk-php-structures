<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property string|null $sessionName
 * @property int<0, 2147483647>|null $appVersion
 * @property int<0, 2147483647>|null $latestPublishedAppVersion
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR' $status
 * @property array<string, Shapes\CardStatus> $cardStatus
 * @property bool|null $userIsHost
 */
class GetQAppSessionResponse extends Response
{
}
