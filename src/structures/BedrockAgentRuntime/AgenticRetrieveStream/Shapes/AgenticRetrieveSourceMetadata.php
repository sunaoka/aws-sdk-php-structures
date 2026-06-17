<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property 'BedrockKnowledgeBase'|null $retrievalType
 */
class AgenticRetrieveSourceMetadata extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     retrievalType?: 'BedrockKnowledgeBase'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
