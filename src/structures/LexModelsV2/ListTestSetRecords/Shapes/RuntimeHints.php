<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<string, RuntimeHintDetails>> $slotHints
 */
class RuntimeHints extends Shape
{
    /**
     * @param array{slotHints?: array<string, array<string, RuntimeHintDetails>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
