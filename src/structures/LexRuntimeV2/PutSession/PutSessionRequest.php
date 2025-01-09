<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property list<Shapes\Message> $messages
 * @property Shapes\SessionState $sessionState
 * @property array<string, string> $requestAttributes
 * @property string $responseContentType
 */
class PutSessionRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     sessionId: string,
     *     messages?: list<Shapes\Message>,
     *     sessionState: Shapes\SessionState,
     *     requestAttributes?: array<string, string>,
     *     responseContentType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
