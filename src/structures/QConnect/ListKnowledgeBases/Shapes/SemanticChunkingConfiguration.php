<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxTokens
 * @property int<0, 1> $bufferSize
 * @property int<50, 99> $breakpointPercentileThreshold
 */
class SemanticChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens: int<1, max>,
     *     bufferSize: int<0, 1>,
     *     breakpointPercentileThreshold: int<50, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
