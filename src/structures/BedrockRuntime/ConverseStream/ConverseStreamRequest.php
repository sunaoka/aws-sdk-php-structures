<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property list<Shapes\Message> $messages
 * @property list<Shapes\SystemContentBlock> $system
 * @property Shapes\InferenceConfiguration $inferenceConfig
 * @property Shapes\ToolConfiguration $toolConfig
 * @property Shapes\GuardrailStreamConfiguration $guardrailConfig
 * @property Shapes\Document $additionalModelRequestFields
 * @property array<string, Shapes\PromptVariableValues> $promptVariables
 * @property list<string> $additionalModelResponseFieldPaths
 * @property array<string, string> $requestMetadata
 * @property Shapes\PerformanceConfiguration $performanceConfig
 */
class ConverseStreamRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     messages?: list<Shapes\Message>,
     *     system?: list<Shapes\SystemContentBlock>,
     *     inferenceConfig?: Shapes\InferenceConfiguration,
     *     toolConfig?: Shapes\ToolConfiguration,
     *     guardrailConfig?: Shapes\GuardrailStreamConfiguration,
     *     additionalModelRequestFields?: Shapes\Document,
     *     promptVariables?: array<string, Shapes\PromptVariableValues>,
     *     additionalModelResponseFieldPaths?: list<string>,
     *     requestMetadata?: array<string, string>,
     *     performanceConfig?: Shapes\PerformanceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
