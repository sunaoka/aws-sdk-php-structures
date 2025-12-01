<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RerankDocument|null $document
 * @property int<0, 1000> $index
 * @property float $relevanceScore
 */
class RerankResult extends Shape
{
    /**
     * @param array{
     *     document?: RerankDocument|null,
     *     index: int<0, 1000>,
     *     relevanceScore: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
