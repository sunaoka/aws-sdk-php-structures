<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property list<Shapes\Message>|null $messages
 * @property Shapes\SessionState $sessionState
 * @property array<string, string>|null $requestAttributes
 * @property string|null $responseContentType
 */
class PutSessionRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     sessionId: string,
     *     messages?: list<Shapes\Message>|null,
     *     sessionState: Shapes\SessionState,
     *     requestAttributes?: array<string, string>|null,
     *     responseContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
