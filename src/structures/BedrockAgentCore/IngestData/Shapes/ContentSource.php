<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\IngestData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InlineMemoryContent|null $inline
 */
class ContentSource extends Shape
{
    /**
     * @param array{inline?: InlineMemoryContent|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
