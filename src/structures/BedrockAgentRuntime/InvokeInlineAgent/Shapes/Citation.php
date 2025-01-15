<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneratedResponsePart|null $generatedResponsePart
 * @property list<RetrievedReference>|null $retrievedReferences
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     generatedResponsePart?: GeneratedResponsePart|null,
     *     retrievedReferences?: list<RetrievedReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
