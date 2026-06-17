<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalContent|null $content
 * @property array<string, Document>|null $metadata
 * @property AgenticRetrieveSourceRetriever|null $sourceRetriever
 */
class AgenticRetrieveTraceResultItem extends Shape
{
    /**
     * @param array{
     *     content?: RetrievalContent|null,
     *     metadata?: array<string, Document>|null,
     *     sourceRetriever?: AgenticRetrieveSourceRetriever|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
