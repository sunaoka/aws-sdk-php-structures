<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property BedrockGuardrailConfiguration|null $guardrail
 * @property 'ENABLED'|'DISABLED'|null $traceStatus
 * @property string|null $customPrompt
 */
class BedrockModelSpecification extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     guardrail?: BedrockGuardrailConfiguration|null,
     *     traceStatus?: 'ENABLED'|'DISABLED'|null,
     *     customPrompt?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
