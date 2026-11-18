<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $sessionIdCount
 * @property int|null $traceIdCount
 */
class GenerationIdentifierCounts extends Shape
{
    /**
     * @param array{
     *     sessionIdCount?: int|null,
     *     traceIdCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
