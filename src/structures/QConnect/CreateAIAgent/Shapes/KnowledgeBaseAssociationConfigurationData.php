<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagFilter $contentTagFilter
 * @property int<1, 100> $maxResults
 * @property 'HYBRID'|'SEMANTIC' $overrideKnowledgeBaseSearchType
 */
class KnowledgeBaseAssociationConfigurationData extends Shape
{
    /**
     * @param array{
     *     contentTagFilter?: TagFilter,
     *     maxResults?: int<1, 100>,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
