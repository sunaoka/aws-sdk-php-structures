<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property string|null $sessionAttributes
 * @property string|null $requestAttributes
 * @property string $contentType
 * @property string|null $accept
 * @property string|resource|\Psr\Http\Message\StreamInterface $inputStream
 * @property string|null $activeContexts
 */
class PostContentRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: string|null,
     *     requestAttributes?: string|null,
     *     contentType: string,
     *     accept?: string|null,
     *     inputStream: string|resource|\Psr\Http\Message\StreamInterface,
     *     activeContexts?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
