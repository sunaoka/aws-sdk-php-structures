<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $guardrailIdentifier
 * @property string|null $guardrailVersion
 * @property 'enabled'|'disabled'|'enabled_full'|null $trace
 * @property 'sync'|'async'|null $streamProcessingMode
 */
class GuardrailStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier?: string|null,
     *     guardrailVersion?: string|null,
     *     trace?: 'enabled'|'disabled'|'enabled_full'|null,
     *     streamProcessingMode?: 'sync'|'async'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
