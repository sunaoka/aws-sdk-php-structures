<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property IntentConfidence $nluIntentConfidence
 * @property array<string, string> $slots
 */
class PredictedIntent extends Shape
{
    /**
     * @param array{
     *     intentName?: string,
     *     nluIntentConfidence?: IntentConfidence,
     *     slots?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
