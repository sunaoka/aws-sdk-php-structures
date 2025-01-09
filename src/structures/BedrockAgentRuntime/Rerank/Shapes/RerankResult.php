<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RerankDocument $document
 * @property int $index
 * @property float $relevanceScore
 */
class RerankResult extends Shape
{
    /**
     * @param array{
     *     document?: RerankDocument,
     *     index: int,
     *     relevanceScore: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
