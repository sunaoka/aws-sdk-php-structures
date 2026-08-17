<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveMessageContent $inputQuery
 * @property string $memoryId
 * @property string|null $namespace
 * @property string|null $namespacePath
 * @property string|null $strategyId
 */
class AgenticRetrieveMemoryRetrieveDetails extends Shape
{
    /**
     * @param array{
     *     inputQuery: AgenticRetrieveMessageContent,
     *     memoryId: string,
     *     namespace?: string|null,
     *     namespacePath?: string|null,
     *     strategyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
