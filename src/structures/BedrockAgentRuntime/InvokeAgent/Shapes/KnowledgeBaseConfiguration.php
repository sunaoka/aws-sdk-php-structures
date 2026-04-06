<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property KnowledgeBaseRetrievalConfiguration $retrievalConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     retrievalConfiguration: KnowledgeBaseRetrievalConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
