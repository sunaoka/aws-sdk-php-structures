<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetrievedReference> $retrievedReferences
 */
class KnowledgeBaseLookupOutput extends Shape
{
    /**
     * @param array{retrievedReferences?: list<RetrievedReference>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
