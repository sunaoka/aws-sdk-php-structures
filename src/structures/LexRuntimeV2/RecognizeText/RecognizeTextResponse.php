<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Message>|null $messages
 * @property Shapes\SessionState|null $sessionState
 * @property list<Shapes\Interpretation>|null $interpretations
 * @property array<string, string>|null $requestAttributes
 * @property string|null $sessionId
 * @property Shapes\RecognizedBotMember|null $recognizedBotMember
 */
class RecognizeTextResponse extends Response
{
}
