<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxTokens
 */
class HierarchicalChunkingLevelConfiguration extends Shape
{
    /**
     * @param array{maxTokens: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
