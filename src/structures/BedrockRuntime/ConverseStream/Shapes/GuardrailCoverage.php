<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTextCharactersCoverage|null $textCharacters
 * @property GuardrailImageCoverage|null $images
 */
class GuardrailCoverage extends Shape
{
    /**
     * @param array{
     *     textCharacters?: GuardrailTextCharactersCoverage|null,
     *     images?: GuardrailImageCoverage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
