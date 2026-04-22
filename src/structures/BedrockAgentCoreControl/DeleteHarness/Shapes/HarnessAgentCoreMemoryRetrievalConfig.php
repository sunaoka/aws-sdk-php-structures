<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $topK
 * @property float|null $relevanceScore
 * @property string|null $strategyId
 */
class HarnessAgentCoreMemoryRetrievalConfig extends Shape
{
    /**
     * @param array{
     *     topK?: int|null,
     *     relevanceScore?: float|null,
     *     strategyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
