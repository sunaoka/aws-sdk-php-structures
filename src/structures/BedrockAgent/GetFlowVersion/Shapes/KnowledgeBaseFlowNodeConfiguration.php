<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property string $knowledgeBaseId
 * @property string|null $modelId
 */
class KnowledgeBaseFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     knowledgeBaseId: string,
     *     modelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
