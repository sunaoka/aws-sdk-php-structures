<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentSignature
 * @property string $description
 */
class BuiltInIntentSummary extends Shape
{
    /**
     * @param array{
     *     intentSignature?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
