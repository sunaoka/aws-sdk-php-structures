<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTextCharactersCoverage $textCharacters
 * @property GuardrailImageCoverage $images
 */
class GuardrailCoverage extends Shape
{
    /**
     * @param array{
     *     textCharacters?: GuardrailTextCharactersCoverage,
     *     images?: GuardrailImageCoverage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
