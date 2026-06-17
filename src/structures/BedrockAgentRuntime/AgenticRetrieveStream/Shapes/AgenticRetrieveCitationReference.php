<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $resultIndex
 */
class AgenticRetrieveCitationReference extends Shape
{
    /**
     * @param array{resultIndex: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
