<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextResponsePart $textResponsePart
 */
class GeneratedResponsePart extends Shape
{
    /**
     * @param array{textResponsePart?: TextResponsePart} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
