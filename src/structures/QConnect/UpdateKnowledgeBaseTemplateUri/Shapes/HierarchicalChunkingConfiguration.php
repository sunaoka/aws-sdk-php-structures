<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HierarchicalChunkingLevelConfiguration> $levelConfigurations
 * @property int<1, max> $overlapTokens
 */
class HierarchicalChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     levelConfigurations: list<HierarchicalChunkingLevelConfiguration>,
     *     overlapTokens: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
