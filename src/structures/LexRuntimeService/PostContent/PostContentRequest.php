<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property string $sessionAttributes
 * @property string $requestAttributes
 * @property string $contentType
 * @property string $accept
 * @property string|resource|\Psr\Http\Message\StreamInterface $inputStream
 * @property string $activeContexts
 */
class PostContentRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: string,
     *     requestAttributes?: string,
     *     contentType: string,
     *     accept?: string,
     *     inputStream: string|resource|\Psr\Http\Message\StreamInterface,
     *     activeContexts?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
