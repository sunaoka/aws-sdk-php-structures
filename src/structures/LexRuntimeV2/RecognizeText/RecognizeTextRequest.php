<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property string $text
 * @property Shapes\SessionState $sessionState
 * @property array<string, string> $requestAttributes
 */
class RecognizeTextRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     sessionId: string,
     *     text: string,
     *     sessionState?: Shapes\SessionState,
     *     requestAttributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
