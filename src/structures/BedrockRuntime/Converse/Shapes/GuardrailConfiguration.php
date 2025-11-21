<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $guardrailIdentifier
 * @property string|null $guardrailVersion
 * @property 'enabled'|'disabled'|'enabled_full'|null $trace
 */
class GuardrailConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier?: string|null,
     *     guardrailVersion?: string|null,
     *     trace?: 'enabled'|'disabled'|'enabled_full'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
