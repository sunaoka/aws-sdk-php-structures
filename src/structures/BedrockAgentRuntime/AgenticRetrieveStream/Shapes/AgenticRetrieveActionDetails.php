<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveMessageContent $inputQuery
 * @property list<AgenticRetrieveSourceRetriever> $sourceRetrievers
 */
class AgenticRetrieveActionDetails extends Shape
{
    /**
     * @param array{
     *     inputQuery: AgenticRetrieveMessageContent,
     *     sourceRetrievers: list<AgenticRetrieveSourceRetriever>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
