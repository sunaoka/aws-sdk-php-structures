<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8192> $maxTokens
 */
class HierarchicalChunkingLevelConfiguration extends Shape
{
    /**
     * @param array{maxTokens: int<1, 8192>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
