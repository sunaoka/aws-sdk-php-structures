<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class RetrievalResultCustomDocumentLocation extends Shape
{
    /**
     * @param array{id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
