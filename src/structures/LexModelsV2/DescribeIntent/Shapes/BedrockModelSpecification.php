<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property BedrockGuardrailConfiguration $guardrail
 * @property 'ENABLED'|'DISABLED' $traceStatus
 * @property string $customPrompt
 */
class BedrockModelSpecification extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     guardrail?: BedrockGuardrailConfiguration,
     *     traceStatus?: 'ENABLED'|'DISABLED',
     *     customPrompt?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
