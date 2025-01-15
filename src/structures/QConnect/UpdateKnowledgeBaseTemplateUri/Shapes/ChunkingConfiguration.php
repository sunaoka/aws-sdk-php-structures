<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIXED_SIZE'|'NONE'|'HIERARCHICAL'|'SEMANTIC' $chunkingStrategy
 * @property FixedSizeChunkingConfiguration|null $fixedSizeChunkingConfiguration
 * @property HierarchicalChunkingConfiguration|null $hierarchicalChunkingConfiguration
 * @property SemanticChunkingConfiguration|null $semanticChunkingConfiguration
 */
class ChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     chunkingStrategy: 'FIXED_SIZE'|'NONE'|'HIERARCHICAL'|'SEMANTIC',
     *     fixedSizeChunkingConfiguration?: FixedSizeChunkingConfiguration|null,
     *     hierarchicalChunkingConfiguration?: HierarchicalChunkingConfiguration|null,
     *     semanticChunkingConfiguration?: SemanticChunkingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
