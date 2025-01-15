<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeUtterance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $inputMode
 * @property string|null $contentType
 * @property string|null $messages
 * @property string|null $interpretations
 * @property string|null $sessionState
 * @property string|null $requestAttributes
 * @property string|null $sessionId
 * @property string|null $inputTranscript
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $audioStream
 * @property string|null $recognizedBotMember
 */
class RecognizeUtteranceResponse extends Response
{
}
