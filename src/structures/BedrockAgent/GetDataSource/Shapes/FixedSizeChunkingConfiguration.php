<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxTokens
 * @property int $overlapPercentage
 */
class FixedSizeChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens: int,
     *     overlapPercentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
