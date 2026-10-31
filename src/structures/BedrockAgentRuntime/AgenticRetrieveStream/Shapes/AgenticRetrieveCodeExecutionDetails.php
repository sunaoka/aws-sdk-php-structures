<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgenticRetrieveCodeExecutionDocument>|null $documents
 */
class AgenticRetrieveCodeExecutionDetails extends Shape
{
    /**
     * @param array{documents?: list<AgenticRetrieveCodeExecutionDocument>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
