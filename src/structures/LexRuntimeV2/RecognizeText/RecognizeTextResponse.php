<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Message> $messages
 * @property Shapes\SessionState $sessionState
 * @property list<Shapes\Interpretation> $interpretations
 * @property array<string, string> $requestAttributes
 * @property string $sessionId
 * @property Shapes\RecognizedBotMember $recognizedBotMember
 */
class RecognizeTextResponse extends Response
{
}
