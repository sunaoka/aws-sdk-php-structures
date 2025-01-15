<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChunkingConfiguration|null $chunkingConfiguration
 * @property CustomTransformationConfiguration|null $customTransformationConfiguration
 * @property ParsingConfiguration|null $parsingConfiguration
 */
class VectorIngestionConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingConfiguration?: ChunkingConfiguration|null,
     *     customTransformationConfiguration?: CustomTransformationConfiguration|null,
     *     parsingConfiguration?: ParsingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
