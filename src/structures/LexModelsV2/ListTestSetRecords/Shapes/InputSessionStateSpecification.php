<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $sessionAttributes
 * @property list<ActiveContext> $activeContexts
 * @property RuntimeHints $runtimeHints
 */
class InputSessionStateSpecification extends Shape
{
    /**
     * @param array{
     *     sessionAttributes?: array<string, string>,
     *     activeContexts?: list<ActiveContext>,
     *     runtimeHints?: RuntimeHints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
