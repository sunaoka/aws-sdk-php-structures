<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemoryJsonDataContent $content
 */
class MemoryJsonData extends Shape
{
    /**
     * @param array{content: MemoryJsonDataContent} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
