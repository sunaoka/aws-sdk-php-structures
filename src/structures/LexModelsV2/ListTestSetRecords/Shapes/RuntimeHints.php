<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<string, RuntimeHintDetails>>|null $slotHints
 */
class RuntimeHints extends Shape
{
    /**
     * @param array{slotHints?: array<string, array<string, RuntimeHintDetails>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
