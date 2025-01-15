<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogAction|null $dialogAction
 * @property Intent|null $intent
 * @property list<ActiveContext>|null $activeContexts
 * @property array<string, string>|null $sessionAttributes
 * @property string|null $originatingRequestId
 * @property RuntimeHints|null $runtimeHints
 */
class SessionState extends Shape
{
    /**
     * @param array{
     *     dialogAction?: DialogAction|null,
     *     intent?: Intent|null,
     *     activeContexts?: list<ActiveContext>|null,
     *     sessionAttributes?: array<string, string>|null,
     *     originatingRequestId?: string|null,
     *     runtimeHints?: RuntimeHints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
