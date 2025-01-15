<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sessionId
 * @property list<Shapes\Message>|null $messages
 * @property list<Shapes\Interpretation>|null $interpretations
 * @property Shapes\SessionState|null $sessionState
 */
class GetSessionResponse extends Response
{
}
