<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata|null $metadata
 * @property list<RetrievedReference>|null $retrievedReferences
 */
class KnowledgeBaseLookupOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata|null,
     *     retrievedReferences?: list<RetrievedReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
