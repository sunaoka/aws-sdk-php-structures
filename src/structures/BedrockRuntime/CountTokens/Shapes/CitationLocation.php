<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebLocation|null $web
 * @property DocumentCharLocation|null $documentChar
 * @property DocumentPageLocation|null $documentPage
 * @property DocumentChunkLocation|null $documentChunk
 * @property SearchResultLocation|null $searchResultLocation
 */
class CitationLocation extends Shape
{
    /**
     * @param array{
     *     web?: WebLocation|null,
     *     documentChar?: DocumentCharLocation|null,
     *     documentPage?: DocumentPageLocation|null,
     *     documentChunk?: DocumentChunkLocation|null,
     *     searchResultLocation?: SearchResultLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
