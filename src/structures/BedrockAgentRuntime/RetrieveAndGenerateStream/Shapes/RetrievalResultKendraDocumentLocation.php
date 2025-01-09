<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class RetrievalResultKendraDocumentLocation extends Shape
{
    /**
     * @param array{uri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
