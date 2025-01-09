<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChunkingConfiguration $chunkingConfiguration
 * @property ParsingConfiguration $parsingConfiguration
 */
class VectorIngestionConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingConfiguration?: ChunkingConfiguration,
     *     parsingConfiguration?: ParsingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
