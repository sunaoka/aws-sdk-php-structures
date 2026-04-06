<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED' $status
 * @property array<string, Shapes\CardStatus> $cardStatus
 */
class GetQAppSessionResponse extends Response
{
}
