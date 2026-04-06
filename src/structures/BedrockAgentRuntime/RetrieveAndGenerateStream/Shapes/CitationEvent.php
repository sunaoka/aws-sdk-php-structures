<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Citation|null $citation
 * @property GeneratedResponsePart|null $generatedResponsePart
 * @property list<RetrievedReference>|null $retrievedReferences
 */
class CitationEvent extends Shape
{
    /**
     * @param array{
     *     citation?: Citation|null,
     *     generatedResponsePart?: GeneratedResponsePart|null,
     *     retrievedReferences?: list<RetrievedReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
