<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sessionIds
 * @property list<string>|null $traceIds
 */
class GenerationIdentifiers extends Shape
{
    /**
     * @param array{
     *     sessionIds?: list<string>|null,
     *     traceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
