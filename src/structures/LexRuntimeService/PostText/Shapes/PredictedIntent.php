<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentName
 * @property IntentConfidence|null $nluIntentConfidence
 * @property array<string, string>|null $slots
 */
class PredictedIntent extends Shape
{
    /**
     * @param array{
     *     intentName?: string|null,
     *     nluIntentConfidence?: IntentConfidence|null,
     *     slots?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
