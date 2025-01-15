<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property array<string, string>|null $sessionAttributes
 * @property array<string, string>|null $requestAttributes
 * @property string $inputText
 * @property list<Shapes\ActiveContext>|null $activeContexts
 */
class PostTextRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: array<string, string>|null,
     *     requestAttributes?: array<string, string>|null,
     *     inputText: string,
     *     activeContexts?: list<Shapes\ActiveContext>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
