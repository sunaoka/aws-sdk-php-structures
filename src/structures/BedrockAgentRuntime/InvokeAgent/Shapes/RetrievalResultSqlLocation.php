<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 */
class RetrievalResultSqlLocation extends Shape
{
    /**
     * @param array{query?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
