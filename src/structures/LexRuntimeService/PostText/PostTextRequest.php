<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property array<string, string> $sessionAttributes
 * @property array<string, string> $requestAttributes
 * @property string $inputText
 * @property list<Shapes\ActiveContext> $activeContexts
 */
class PostTextRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: array<string, string>,
     *     requestAttributes?: array<string, string>,
     *     inputText: string,
     *     activeContexts?: list<Shapes\ActiveContext>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
