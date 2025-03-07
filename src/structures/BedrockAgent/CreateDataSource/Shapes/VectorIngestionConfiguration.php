<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChunkingConfiguration|null $chunkingConfiguration
 * @property ContextEnrichmentConfiguration|null $contextEnrichmentConfiguration
 * @property CustomTransformationConfiguration|null $customTransformationConfiguration
 * @property ParsingConfiguration|null $parsingConfiguration
 */
class VectorIngestionConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingConfiguration?: ChunkingConfiguration|null,
     *     contextEnrichmentConfiguration?: ContextEnrichmentConfiguration|null,
     *     customTransformationConfiguration?: CustomTransformationConfiguration|null,
     *     parsingConfiguration?: ParsingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
