<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $sessionAttributes
 * @property list<ActiveContext>|null $activeContexts
 * @property RuntimeHints|null $runtimeHints
 */
class InputSessionStateSpecification extends Shape
{
    /**
     * @param array{
     *     sessionAttributes?: array<string, string>|null,
     *     activeContexts?: list<ActiveContext>|null,
     *     runtimeHints?: RuntimeHints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
