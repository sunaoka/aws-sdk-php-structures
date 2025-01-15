<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $query
 */
class RetrievalResultSqlLocation extends Shape
{
    /**
     * @param array{query?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
