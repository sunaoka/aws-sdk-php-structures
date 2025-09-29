<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000> $index
 * @property float $relevanceScore
 * @property RerankDocument|null $document
 */
class RerankResult extends Shape
{
    /**
     * @param array{
     *     index: int<0, 1000>,
     *     relevanceScore: float,
     *     document?: RerankDocument|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
