<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<50, 99> $breakpointPercentileThreshold
 * @property int<0, 1> $bufferSize
 * @property int<1, max> $maxTokens
 */
class SemanticChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     breakpointPercentileThreshold: int<50, 99>,
     *     bufferSize: int<0, 1>,
     *     maxTokens: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
