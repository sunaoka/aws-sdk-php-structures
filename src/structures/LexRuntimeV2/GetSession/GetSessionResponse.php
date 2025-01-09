<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property list<Shapes\Message> $messages
 * @property list<Shapes\Interpretation> $interpretations
 * @property Shapes\SessionState $sessionState
 */
class GetSessionResponse extends Response
{
}
