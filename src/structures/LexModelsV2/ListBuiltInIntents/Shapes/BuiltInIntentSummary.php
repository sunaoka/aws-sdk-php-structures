<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentSignature
 * @property string|null $description
 */
class BuiltInIntentSummary extends Shape
{
    /**
     * @param array{
     *     intentSignature?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
