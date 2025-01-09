<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogAction $dialogAction
 * @property Intent $intent
 * @property list<ActiveContext> $activeContexts
 * @property array<string, string> $sessionAttributes
 * @property string $originatingRequestId
 * @property RuntimeHints $runtimeHints
 */
class SessionState extends Shape
{
    /**
     * @param array{
     *     dialogAction?: DialogAction,
     *     intent?: Intent,
     *     activeContexts?: list<ActiveContext>,
     *     sessionAttributes?: array<string, string>,
     *     originatingRequestId?: string,
     *     runtimeHints?: RuntimeHints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
