<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $guardrailIdentifier
 * @property string|null $guardrailVersion
 */
class GuardrailConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier?: string|null,
     *     guardrailVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
