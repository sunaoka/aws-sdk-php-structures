<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetrievedReference>|null $retrievedReferences
 * @property Metadata|null $metadata
 */
class KnowledgeBaseLookupOutput extends Shape
{
    /**
     * @param array{
     *     retrievedReferences?: list<RetrievedReference>|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
