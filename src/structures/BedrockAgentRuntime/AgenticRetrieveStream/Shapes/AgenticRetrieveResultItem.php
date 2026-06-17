<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalContent $content
 * @property array<string, Document>|null $metadata
 * @property AgenticRetrieveSourceRetriever $sourceRetriever
 */
class AgenticRetrieveResultItem extends Shape
{
    /**
     * @param array{
     *     content: RetrievalContent,
     *     metadata?: array<string, Document>|null,
     *     sourceRetriever: AgenticRetrieveSourceRetriever
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
