<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property list<Shapes\Message>|null $messages
 * @property list<Shapes\SystemContentBlock>|null $system
 * @property Shapes\InferenceConfiguration|null $inferenceConfig
 * @property Shapes\ToolConfiguration|null $toolConfig
 * @property Shapes\GuardrailConfiguration|null $guardrailConfig
 * @property Shapes\Document|null $additionalModelRequestFields
 * @property array<string, Shapes\PromptVariableValues>|null $promptVariables
 * @property list<string>|null $additionalModelResponseFieldPaths
 * @property array<string, string>|null $requestMetadata
 * @property Shapes\PerformanceConfiguration|null $performanceConfig
 */
class ConverseRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     messages?: list<Shapes\Message>|null,
     *     system?: list<Shapes\SystemContentBlock>|null,
     *     inferenceConfig?: Shapes\InferenceConfiguration|null,
     *     toolConfig?: Shapes\ToolConfiguration|null,
     *     guardrailConfig?: Shapes\GuardrailConfiguration|null,
     *     additionalModelRequestFields?: Shapes\Document|null,
     *     promptVariables?: array<string, Shapes\PromptVariableValues>|null,
     *     additionalModelResponseFieldPaths?: list<string>|null,
     *     requestMetadata?: array<string, string>|null,
     *     performanceConfig?: Shapes\PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
