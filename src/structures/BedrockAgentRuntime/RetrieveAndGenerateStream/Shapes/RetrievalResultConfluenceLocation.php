<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class RetrievalResultConfluenceLocation extends Shape
{
    /**
     * @param array{url?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
