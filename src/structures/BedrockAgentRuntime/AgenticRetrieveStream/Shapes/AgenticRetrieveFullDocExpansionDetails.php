<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $documentId
 * @property AgenticRetrieveSourceRetriever|null $sourceRetriever
 */
class AgenticRetrieveFullDocExpansionDetails extends Shape
{
    /**
     * @param array{
     *     documentId?: string|null,
     *     sourceRetriever?: AgenticRetrieveSourceRetriever|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
