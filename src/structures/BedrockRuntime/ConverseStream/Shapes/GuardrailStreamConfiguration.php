<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 * @property 'enabled'|'disabled'|'enabled_full'|null $trace
 * @property 'sync'|'async'|null $streamProcessingMode
 */
class GuardrailStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion: string,
     *     trace?: 'enabled'|'disabled'|'enabled_full'|null,
     *     streamProcessingMode?: 'sync'|'async'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
