<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIXED_SIZE'|'NONE'|'HIERARCHICAL'|'SEMANTIC' $chunkingStrategy
 * @property FixedSizeChunkingConfiguration $fixedSizeChunkingConfiguration
 * @property HierarchicalChunkingConfiguration $hierarchicalChunkingConfiguration
 * @property SemanticChunkingConfiguration $semanticChunkingConfiguration
 */
class ChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingStrategy: 'FIXED_SIZE'|'NONE'|'HIERARCHICAL'|'SEMANTIC',
     *     fixedSizeChunkingConfiguration?: FixedSizeChunkingConfiguration,
     *     hierarchicalChunkingConfiguration?: HierarchicalChunkingConfiguration,
     *     semanticChunkingConfiguration?: SemanticChunkingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
