<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveGeneratedResponse|null $generatedResponse
 * @property string|null $nextToken
 * @property list<AgenticRetrieveResultItem> $results
 */
class AgenticRetrieveResultEvent extends Shape
{
    /**
     * @param array{
     *     generatedResponse?: AgenticRetrieveGeneratedResponse|null,
     *     nextToken?: string|null,
     *     results: list<AgenticRetrieveResultItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
