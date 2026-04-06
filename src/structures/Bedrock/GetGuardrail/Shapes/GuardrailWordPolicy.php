<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailWord>|null $words
 * @property list<GuardrailManagedWords>|null $managedWordLists
 */
class GuardrailWordPolicy extends Shape
{
    /**
     * @param array{
     *     words?: list<GuardrailWord>|null,
     *     managedWordLists?: list<GuardrailManagedWords>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
