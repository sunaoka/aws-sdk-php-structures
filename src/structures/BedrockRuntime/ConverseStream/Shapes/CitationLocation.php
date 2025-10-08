<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentCharLocation|null $documentChar
 * @property DocumentPageLocation|null $documentPage
 * @property DocumentChunkLocation|null $documentChunk
 */
class CitationLocation extends Shape
{
    /**
     * @param array{
     *     documentChar?: DocumentCharLocation|null,
     *     documentPage?: DocumentPageLocation|null,
     *     documentChunk?: DocumentChunkLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
