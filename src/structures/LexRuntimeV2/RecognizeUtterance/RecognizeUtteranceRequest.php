<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeUtterance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property string|null $sessionState
 * @property string|null $requestAttributes
 * @property string $requestContentType
 * @property string|null $responseContentType
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $inputStream
 */
class RecognizeUtteranceRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     sessionId: string,
     *     sessionState?: string|null,
     *     requestAttributes?: string|null,
     *     requestContentType: string,
     *     responseContentType?: string|null,
     *     inputStream?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
