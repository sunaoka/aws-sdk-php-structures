<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFilter|null $filter
 * @property int<1, max>|null $maxNumberOfResults
 */
class RetrievalOverrides extends Shape
{
    /**
     * @param array{
     *     filter?: RetrievalFilter|null,
     *     maxNumberOfResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
