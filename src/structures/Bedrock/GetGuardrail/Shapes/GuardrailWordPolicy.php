<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailWord> $words
 * @property list<GuardrailManagedWords> $managedWordLists
 */
class GuardrailWordPolicy extends Shape
{
    /**
     * @param array{
     *     words?: list<GuardrailWord>,
     *     managedWordLists?: list<GuardrailManagedWords>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
