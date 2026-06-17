<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $endIndex
 * @property list<AgenticRetrieveCitationReference> $references
 * @property int $startIndex
 */
class AgenticRetrieveCitation extends Shape
{
    /**
     * @param array{
     *     endIndex: int,
     *     references: list<AgenticRetrieveCitationReference>,
     *     startIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
