<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property list<Shapes\Message> $messages
 * @property list<Shapes\SystemContentBlock>|null $system
 * @property Shapes\InferenceConfiguration|null $inferenceConfig
 * @property Shapes\ToolConfiguration|null $toolConfig
 * @property Shapes\GuardrailConfiguration|null $guardrailConfig
 * @property Shapes\Document|null $additionalModelRequestFields
 * @property list<string>|null $additionalModelResponseFieldPaths
 */
class ConverseRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     messages: list<Shapes\Message>,
     *     system?: list<Shapes\SystemContentBlock>|null,
     *     inferenceConfig?: Shapes\InferenceConfiguration|null,
     *     toolConfig?: Shapes\ToolConfiguration|null,
     *     guardrailConfig?: Shapes\GuardrailConfiguration|null,
     *     additionalModelRequestFields?: Shapes\Document|null,
     *     additionalModelResponseFieldPaths?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
