<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChunkingConfiguration $chunkingConfiguration
 * @property CustomTransformationConfiguration $customTransformationConfiguration
 * @property ParsingConfiguration $parsingConfiguration
 */
class VectorIngestionConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingConfiguration?: ChunkingConfiguration,
     *     customTransformationConfiguration?: CustomTransformationConfiguration,
     *     parsingConfiguration?: ParsingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
