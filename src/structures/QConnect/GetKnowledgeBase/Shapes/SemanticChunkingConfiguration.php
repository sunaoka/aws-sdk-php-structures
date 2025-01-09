<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $breakpointPercentileThreshold
 * @property int $bufferSize
 * @property int $maxTokens
 */
class SemanticChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     breakpointPercentileThreshold: int,
     *     bufferSize: int,
     *     maxTokens: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
