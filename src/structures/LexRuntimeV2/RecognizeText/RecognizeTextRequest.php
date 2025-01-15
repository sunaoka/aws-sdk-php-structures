<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property string $text
 * @property Shapes\SessionState|null $sessionState
 * @property array<string, string>|null $requestAttributes
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
     *     sessionState?: Shapes\SessionState|null,
     *     requestAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
