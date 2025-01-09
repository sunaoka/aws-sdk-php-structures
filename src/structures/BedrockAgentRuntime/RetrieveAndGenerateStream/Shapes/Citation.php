<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneratedResponsePart $generatedResponsePart
 * @property list<RetrievedReference> $retrievedReferences
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     generatedResponsePart?: GeneratedResponsePart,
     *     retrievedReferences?: list<RetrievedReference>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
