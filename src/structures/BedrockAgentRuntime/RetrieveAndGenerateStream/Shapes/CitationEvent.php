<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Citation $citation
 */
class CitationEvent extends Shape
{
    /**
     * @param array{citation?: Citation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
