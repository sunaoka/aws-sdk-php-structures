<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8192> $maxTokens
 * @property int<1, 99> $overlapPercentage
 */
class FixedSizeChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens: int<1, 8192>,
     *     overlapPercentage: int<1, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
