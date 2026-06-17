<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveTraceEventAttributes $attributes
 * @property string $id
 * @property int $timestamp
 */
class AgenticRetrieveTraceEvent extends Shape
{
    /**
     * @param array{
     *     attributes: AgenticRetrieveTraceEventAttributes,
     *     id: string,
     *     timestamp: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
