<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeUtterance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property string $sessionId
 * @property string $sessionState
 * @property string $requestAttributes
 * @property string $requestContentType
 * @property string $responseContentType
 * @property string|resource|\Psr\Http\Message\StreamInterface $inputStream
 */
class RecognizeUtteranceRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     sessionId: string,
     *     sessionState?: string,
     *     requestAttributes?: string,
     *     requestContentType: string,
     *     responseContentType?: string,
     *     inputStream?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
