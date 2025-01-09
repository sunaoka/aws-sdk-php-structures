<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagFilter $contentTagFilter
 * @property int $maxResults
 * @property 'HYBRID'|'SEMANTIC' $overrideKnowledgeBaseSearchType
 */
class KnowledgeBaseAssociationConfigurationData extends Shape
{
    /**
     * @param array{
     *     contentTagFilter?: TagFilter,
     *     maxResults?: int,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
