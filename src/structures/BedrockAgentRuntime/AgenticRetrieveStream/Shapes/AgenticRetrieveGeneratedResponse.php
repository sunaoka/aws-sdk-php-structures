<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $answer
 * @property list<AgenticRetrieveCitation>|null $citations
 */
class AgenticRetrieveGeneratedResponse extends Shape
{
    /**
     * @param array{
     *     answer: string,
     *     citations?: list<AgenticRetrieveCitation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
