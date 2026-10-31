<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveCodeExecutionDetails|null $codeExecution
 * @property AgenticRetrieveFullDocExpansionDetails|null $fullDocumentExpansion
 * @property AgenticRetrieveMemoryRetrieveDetails|null $memoryRetrieve
 * @property AgenticRetrieveActionDetails|null $retrieve
 */
class AgenticRetrieveAction extends Shape
{
    /**
     * @param array{
     *     codeExecution?: AgenticRetrieveCodeExecutionDetails|null,
     *     fullDocumentExpansion?: AgenticRetrieveFullDocExpansionDetails|null,
     *     memoryRetrieve?: AgenticRetrieveMemoryRetrieveDetails|null,
     *     retrieve?: AgenticRetrieveActionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
